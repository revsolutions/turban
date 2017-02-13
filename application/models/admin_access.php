<?php 

	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Admin_access extends CI_Model {

		function __construct()
		{
			parent::__construct();		
		}

		function sess_check($data = array())
		{
			return $this->db->get_where('admin', $data)->result_array();
		}

		function page_name($data = array())
		{
			return $this->db->get_where('pages_name', $data)->result_array();
		}
		function get_content($page = array())
		{
			return $this->db->get_where('content', $page)->result_array();
		}

		function set_content($set_cont = array())
		{
			return $this->db->set('content', $set_cont['content'])->where('slug', $set_cont['slug'])->update('content');
		}
	    
	}
	        
 ?>