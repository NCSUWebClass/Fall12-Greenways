<?php

class Admin_homepage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();	
	}
	
	function index()
	{
		$this->load->model('homepage_model');
		
		if($query = $this->homepage_model->get_records())
			{
				$data['images'] = $query;
			}
		else { 
			$query = 0;
			}
			;
		$this->is_logged_in();
		
		$data['images'] = $this->homepage_model->get_records();
		$this->load->view('admin_homepage_view', $data);
	}
	
	function create() {
		$data = array(
			'text' => $this->input->post('text')
					
		);
			$this->homepage_model->add_records($data);
			$this->index();
	}
	
	
	function delete() {
		$this->homepage_model->delete_row();
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

