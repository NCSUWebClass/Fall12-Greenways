<?php

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();	
	}
	
	function index()
	{
		/*$this->load->model('admin_model');
		$this->load->model('site_model');*/
		
		if($query = $this->site_model->get_photos())
		{
			$data['images'] = $query;
		}
		else { 
			$query = 0;
		}
		;
		$this->is_logged_in();
		
		$data['images'] = $this->site_model->get_photos();
		$this->load->view('admin_view', $data);
	}
	
	function delete() {
		$this->admin_model->delete_row();
		$this->index();
	}
/*	function update_happening() 
	{
		if($query = $this->admin_model->update_record())
		{
			$data['images'] = $query;
		}
		else { 
			$query = 0;
		}
		;
				
		$data['images'] = $this->admin_model->update_record();
		$this->load->view('upload_success', $data);
		
	}*/
	
	function delete_home() {
		$this->admin_model->delete_home_row();
		$this->index();
	}
	function delete_gallery() {
		/*$this->load->model('admin_model');*/
		$this->admin_model->delete_photos();
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

