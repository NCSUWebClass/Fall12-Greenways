<?php

class Site extends CI_Controller {

	
	public function index()
	{
		$data = array();
		$data['images'] = $this->homepage_model->get_photos();
		$data['records'] = $this->homepage_model->get_records();
		
		$this->load->view('site_view',  $data);
	}
}

