<?php

class Admin_homeimg extends CI_Controller {
	
	

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();	
		
		$this->gallery_path = realpath(APPPATH . '../uploadsHome/');
		$this->gallery_path_url = base_url().'uploadsHome/';
	}
	
	function index()
	{
		if($query = $this->homepage_model->get_photos())
		{
			$data['images'] = $query;
		}
		else { 
			$query = 0;
		}
		;
		$this->is_logged_in();
		
		$data['images'] = $this->homepage_model->get_photos();
		
		$this->load->view('admin_homeimg_view', $data);
	}
		
	function create() {
		$data = array(
			'image' => $this->input->post('image')
			
		);
			$this->homepage_model->add_photo($data);
			$this->index();
	}
		
	function delete() {
		$this->homepage_model->delete_photos();
		$this->index();
	}
	function members_area()
	{
		$this->load->view('admin_homepage');
	}
	
	function another_page() // just for sample
	{
		echo 'good. you\'re logged in.';
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. ';
			echo anchor('login', 'Log In'); 	
			die();		
			
		}		
	}
}

