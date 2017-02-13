<?php 

	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Admin extends Admin_webaccess {
	
	    function __construct() {
	        parent::__construct();
	        $this->load->helper(array('url','form'));
	        $this->load->library(array('form_validation', 'session'));
	        $this->load->view('admin/admin_base');
	        $this->load->model('admin_access', 'aa');
	        $this->load->database();
	    }
	
	    function index() {
	    	$this->load->view('admin/login');
	        
	    }

	    function valid_admin()
	    {
	    	$user_data = array('username' => $this->input->post('uname'),
	    						'password' => $this->input->post('upass'));
	    	$this->form_validation->set_rules('uname', 'Username', 'trim|required');
	    	$this->form_validation->set_rules('upass', 'Password', 'trim|required');
	    	if($this->form_validation->run())
	    	{
	    		if($this->aa->sess_check($user_data))
	    		{
	    			$uname = $this->input->post('uname');
					$this->session->set_userdata("user_name",$uname);
	    			redirect('admin/dashboard','refresh');
	    		}
	    		else
	    		{
	    			redirect('admin/index','refresh');
	    		}
	    	}
	    	else
	    	{
	    		redirect('admin/index','refresh');
	    	}
	    }

	    function sidebar()
	    {
	    	$pages['name'] = $this->aa->page_name(array('status'=>0));
	    	$pages['media'] = $this->aa->page_name(array('status'=>1));	    	
	    	$this->load->view('admin/sidebar', $pages);
	    }

	    function logout()
	    {
	    	$this->session->unset_userdata();
	    	redirect('admin/index');
	    }

	    function dashboard()
	    {
	    	$this->load->view('admin/top_nav');
	    	$this->sidebar();
	    	$this->load->view('admin/dashboard');
	    	$this->load->view('admin/footer');
	    }

	    // function home()
	    // {
	    // 	$home['h_data'] = $this->aa->get_content(array('page_name'=>'home'));
	    // 	$this->load->view('admin/top_nav');
	    // 	$this->sidebar();
	    // 	$this->load->view('admin/home', $home);
	    // 	$this->load->view('admin/footer');
	    // }
	    function pages()
	    {
	    	$p_name = $this->uri->segment(3);
	    	$home['h_data'] = $this->aa->get_content(array('slug'=>$p_name));
	    	$this->load->view('admin/top_nav');
	    	$this->sidebar();
	    	$this->load->view('admin/g_content', $home);
	    	$this->load->view('admin/footer');
	    }

	    function pages_submit()
	    {

	    	if($this->input->post('submit'))
	    	{
	    		$slug = $this->input->post('slug');
	    		$s_content = array(
	    			'content' => $this->input->post('content'), 
	    			'slug'=>$slug);
	    		$this->aa->set_content($s_content);
	    		redirect('admin/pages/'.$this->input->post('slug'),'refresh');
	    		// print_r($this->uri->uri_segment(3));
	    	}
	    }
	    function media()
	    {
	    	// $this->load->library('table');
	    	$p_name = $this->uri->segment(3);
	    	// echo $p_name;
	    	$pages['media'] = $this->aa->page_name(array('status'=>1));	    	
	    	print_r($pages);
	    	$this->load->view('admin/top_nav');
	    	$this->sidebar();
	    	$this->load->view('admin/media', $pages);
	    	$this->load->view('admin/footer');
	    }

	    function upload()
	    {
	    	$upload_config = array(
	    		'upload_path'=>'./uploads/',
	    		'allowed_types'=>'gif|jpg|jpeg|png',
	    		'max_size'=>2048);
	    	$this->load->library('upload', $upload_config);
	    	if(!$this->upload->do_upload('pic'))
	    	{
	    		$error = array('error'=>$this->upload->display_errors());
	    		$this->load->view('admin/media', $error);
	    	}
	    	else
	    	{
	    		
	    	}
	    }

	}
	        
 ?>