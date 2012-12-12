<?php

class Admin_events extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();	
	}
	
	function index()
	{
		$this->load->model('site_model');
		
		if($query = $this->site_model->get_events())
			{
				$data['events'] = $query;
			}
		else { 
			$query = 0;
			}
			;
		$this->is_logged_in();
		
		$data['events'] = $this->site_model->get_events();
		$this->load->view('admin_events_view', $data);
	}
	
	function create() {
		$data = array(
			'title' => $this->input->post('title'),
			'copy' => $this->input->post('copy')
					
		);
			$this->site_model->add_events($data);
			$this->index();
	}
	
	function update_row()
		{
			$this->site_model->update_row();
			$this->index();
			
		}
	function delete() {
		$this->site_model->delete_events_row();
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

