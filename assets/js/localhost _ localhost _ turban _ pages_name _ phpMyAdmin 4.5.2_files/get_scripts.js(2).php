/*
 * Copyright (c) 2008 Greg Weber greg at gregweber.info
 * Dual licensed under the MIT and GPLv2 licenses just as jQuery is:
 * http://jquery.org/license
 *
 * Multi-columns fork by natinusala
 *
 * documentation at http://gregweber.info/projects/uitablefilter
 *                  https://github.com/natinusala/jquery-uitablefilter
 *
 * allows table rows to be filtered (made invisible)
 * <code>
 * t = $('table')
 * $.uiTableFilter( t, phrase )
 * </code>
 * arguments:
 *   jQuery object containing table rows
 *   phrase to search for
 *   optional arguments:
 *     array of columns to limit search too (the column title in the table header)
 *     ifHidden - callback to execute if one or more elements was hidden
 *     tdElem - specific element within <td> to be considered for searching or to limit search to,
 *     default:whole <td>. useful if <td> has more than one elements inside but want to
 *     limit search within only some of elements or only visible elements. eg tdElem can be "td span"
 */
(function($) {
  $.uiTableFilter = function(jq, phrase, column, ifHidden, tdElem){
    if(!tdElem) tdElem = "td";
    var new_hidden = false;
    if( this.last_phrase === phrase ) return false;

    var phrase_length = phrase.length;
    var words = phrase.toLowerCase().split(" ");

    // these function pointers may change
    var matches = function(elem) { elem.show() }
    var noMatch = function(elem) { elem.hide(); new_hidden = true }
    var getText = function(elem) { return elem.text() }

    if( column )
    {
      if (!$.isArray(column))
      {
        column = new Array(column);
      }

      var index = new Array();

      jq.find("thead > tr:last > th").each(function(i)
      {
          for (var j = 0; j < column.length; j++)
          {
              if ($.trim($(this).text()) == column[j])
              {
                  index[j] = i;
                  break;
              }
          }

      });

      getText = function(elem) {
          var selector = "";
          for (var i = 0; i < index.length; i++)
          {
              if (i != 0) {selector += ",";}
              selector += tdElem + ":eq(" + index[i] + ")";
          }
          return $(elem.find((selector))).text();
      }
    }

    // if added one letter to last time,
    // just check newest word and only need to hide
    if( (words.size > 1) && (phrase.substr(0, phrase_length - 1) ===
          this.last_phrase) ) {

      if( phrase[-1] === " " )
      { this.last_phrase = phrase; return false; }

      var words = words[-1]; // just search for the newest word

      // only hide visible rows
      matches = function(elem) {;}
      var elems = jq.find("tbody:first > tr:visible")
    }
    else {
      new_hidden = true;
      var elems = jq.find("tbody:first > tr")
    }

    elems.each(function(){
      var elem = $(this);
      $.uiTableFilter.has_words( getText(elem), words, false ) ?
        matches(elem) : noMatch(elem);
    });

    last_phrase = phrase;
    if( ifHidden && new_hidden ) ifHidden();
    return jq;
  };

  // caching for speedup
  $.uiTableFilter.last_phrase = ""

  // not jQuery dependent
  // "" [""] -> Boolean
  // "" [""] Boolean -> Boolean
  $.uiTableFilter.has_words = function( str, words, caseSensitive )
  {
    var text = caseSensitive ? str : str.toLowerCase();
    for (var i=0; i < words.length; i++) {
      if (text.indexOf(words[i]) === -1) return false;
    }
    return true;
  }
}) (jQuery);
;

/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * @fileoverview    Implements the shiftkey + click remove column
 *                  from order by clause funcationality
 * @name            columndelete
 *
 * @requires    jQuery
 */

function captureURL(url)
{
    var URL = {};
    url = '' + url;
    // Exclude the url part till HTTP
    url = url.substr(url.search("sql.php"), url.length);
    // The url part between ORDER BY and &session_max_rows needs to be replaced.
    URL.head = url.substr(0, url.indexOf('ORDER+BY') + 9);
    URL.tail = url.substr(url.indexOf("&session_max_rows"), url.length);
    return URL;
}

/**
 * This function is for navigating to the generated URL
 *
 * @param object   target HTMLAnchor element
 * @param object   parent HTMLDom Object
 */

function removeColumnFromMultiSort(target, parent)
{
    var URL = captureURL(target);
    var begin = target.indexOf('ORDER+BY') + 8;
    var end = target.indexOf('&session_max_rows');
    // get the names of the columns involved
    var between_part = target.substr(begin, end-begin);
    var columns = between_part.split('%2C+');
    // If the given column is not part of the order clause exit from this function
    var index = parent.find('small').length ? parent.find('small').text() : '';
    if (index === ''){
        return '';
    }
    // Remove the current clicked column
    columns.splice(index-1, 1);
    // If all the columns have been removed dont submit a query with nothing
    // After order by clause.
    if (columns.length === 0) {
        var head = URL.head;
        head = head.slice(0,head.indexOf('ORDER+BY'));
        URL.head = head;
        // removing the last sort order should have priority over what
        // is remembered via the RememberSorting directive
        URL.tail += '&discard_remembered_sort=1';
    }
    var middle_part = columns.join('%2C+');
    url = URL.head + middle_part + URL.tail;
    return url;
}

AJAX.registerOnload('keyhandler.js', function () {
    $("th.draggable.column_heading.pointer.marker a").on('click', function (event) {
        var url = $(this).parent().find('input').val();
        if (event.ctrlKey || event.altKey) {
            event.preventDefault();
            url = removeColumnFromMultiSort(url, $(this).parent());
            if (url) {
                AJAX.source = $(this);
                PMA_ajaxShowMessage();
                $.get(url, {'ajax_request' : true, 'ajax_page_request' : true}, AJAX.responseHandler);
            }
        } else if (event.shiftKey) {
            event.preventDefault();
            AJAX.source = $(this);
            PMA_ajaxShowMessage();
            $.get(url, {'ajax_request' : true, 'ajax_page_request' : true}, AJAX.responseHandler);
        }
    });
});

AJAX.registerTeardown('keyhandler.js', function () {
    $(document).off('click', "th.draggable.column_heading.pointer.marker a");
});
;

AJAX.scriptHandler.done();