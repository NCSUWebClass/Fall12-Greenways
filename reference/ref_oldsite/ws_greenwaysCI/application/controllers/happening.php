<?php

class Happening extends CI_Controller {

	public function index()
	{
		
		
		$data = array();
		$data['items'] = $this->site_model->get_records();
		
		$this->load->view('happening_view',  $data);
	}
}
