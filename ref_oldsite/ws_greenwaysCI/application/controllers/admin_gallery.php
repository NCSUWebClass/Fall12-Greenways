<?php

class Admin_gallery extends CI_Controller {

	var $gallery_path;
	var $gallery_path_url;
	
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();	
		
		$this->gallery_path = realpath(APPPATH . '../uploads/');
		$this->gallery_path_url = base_url().'uploads/';
	}
	
	function index()
	{
		$this->load->model('gallery_model');
		
		if($query = $this->gallery_model->get_all_photos())
		{
			$data['entries'] = $query;
		}
		else { 
			$query = 0;
		}
		;
		$this->is_logged_in();
		
		$data['entries'] = $this->gallery_model->get_all_photos();
		$this->load->view('admin_gallery_view', $data);
	}
	
	function create() {
		$data = array(
			'caption' => $this->input->post('caption'),
			'image' => $this->input->post('image')
			
		);
			$this->gallery_model->add_photos($data);
			$this->index();
	}
	
	function update() {
		$this->gallery_model->update_row();
		$this->index();
	}
	
/*	function edit() {
		
		
		
		$data['entries'] = $this->gallery_model->edit_row();
		$this->load->view('edit_gallery_view', $data);
	}*/
	
	function delete() {
		$this->gallery_model->delete_row();
		$this->index();
	}
	function members_area()
	{
		$this->load->view('admin');
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

