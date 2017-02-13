<?php 
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class MY_Controller extends CI_Controller {
	
	    function __construct() {
	        parent::__construct();
	    }
	}


	class Public_webaccess extends MY_Controller{

		function __construct()
		{
			parent::__construct();
	        $this->load->model('public_access', 'pa');

		}
	}

	class Admin_webaccess extends MY_Controller{

		function __construct()
		{
			parent::__construct();
	        $this->load->model('admin_access', 'aa');
		}
	}
	        
 ?>