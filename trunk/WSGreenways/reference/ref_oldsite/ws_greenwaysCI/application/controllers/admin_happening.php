<?php

class Admin_happening extends CI_Controller {

		
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	
	}
	
	function index() 
	{
		if($query = $this->site_model->get_records())
		{
			$data['images'] = $query;
		}
		else { 
			$query = 0;
		}
		;
		$query = $this->db->order_by('id', 'desc');		
		$data['images'] = $this->site_model->get_records();
		$this->load->view('admin_happening_view', $data);
		
	}
	function do_upload() {
		$data = array(
			'title' => $this->input->post('title'),
			'copy' => $this->input->post('copy'),
			'image' => $this->input->post('image')
		);
			$this->site_model->add_record($data);
			$this->index();
			
			
	}

	function delete() {
		$this->site_model->delete_row();
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
			//$this->load->view('login_form');
		}		
	}
}

?>