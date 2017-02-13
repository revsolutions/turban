<?php 

	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Turban extends Public_webaccess {
	
	    function __construct() {
	        parent::__construct();
	        $this->load->helper(array('url', 'html'));
	        $this->load->view('public/base');
	        $this->load->view('public/nav');
	        $this->load->database();
	        
	    }
	
	    function index() {
	        $con['data'] = $this->pa->pull_data_home();
	        // echo "<pre>";
	        // print_r($con['data']);
	    	$this->load->view('public/carousel');
	        $this->load->view('public/home', $con);
	        $this->load->view('public/footer');
	    }
	    function about()
	    {
	        $con['data'] = $this->pa->pull_data_about();
	    	$this->load->view('public/carousel');
	    	$this->load->view('public/about-us', $con);
	    	$this->load->view('public/footer');
	    }
	    function style()
	    {
	    	$this->load->view('public/carousel');
	    	$this->load->view('public/turban-styles.php');
	    	$this->load->view('public/footer');
	    }
	    function classes()
	    {
	        $con['data'] = $this->pa->pull_data_class();
	    	$this->load->view('public/carousel');
	    	$this->load->view('public/punjabi-class', $con);
	    	$this->load->view('public/footer');
	    }
	    function gallery()
	    {
	    	$this->load->view('public/carousel');
	    	$this->load->view('public/gallery');
	    	$this->load->view('public/footer');
	    }
	    function contact()
	    {
	    	$this->load->view('public/carousel');
	    	$this->load->view('public/contact');
	    	$this->load->view('public/footer');

	    }
	}
	        
 ?>