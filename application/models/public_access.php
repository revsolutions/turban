<?php 

	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Public_access extends CI_Model {
	    function __construct()
	    {
	    	parent::__construct();
	    }

	    //data fetch
	    function pull_data_home()
	    {
	    	$h_data = $this->db->select('*')->from('content')->where(array('status'=>1, 'pid'=>1))->get()->result_array();
	    	return $h_data;
	    }
	    function pull_data_about()
	    {
	    	$a_data = $this->db->get_where('content', array('status'=>1, 'pid'=>2))->result_array();
	    	return $a_data;
	    }
	    function pull_data_class()
	    {
	    	$c_data = $this->db->get_where('content', array('status'=>1, 'pid'=>3))->result_array();
	    	return $c_data;
	    }
	}
	        
 ?>