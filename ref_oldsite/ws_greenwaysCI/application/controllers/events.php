<?php

class Events extends CI_Controller {

	public function index()
	{
		
		
		$data = array();
		$data['events'] = $this->site_model->get_events();
		
		$this->load->view('events_view',  $data);
	}
}
