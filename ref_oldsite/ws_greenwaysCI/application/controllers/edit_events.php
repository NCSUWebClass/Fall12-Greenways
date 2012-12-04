<?php

class Edit_events extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		
		
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
		
		$this->db->where('id', $this->uri->segment(3));
		$data['events'] = $this->site_model->get_events();
		$this->load->view('edit_events_view', $data);
	}
	function edit($id=0)
	{
		
			 if($this->input->post('title','copy')) {
					$this->site_model->updateEvent();
					
					redirect('admin_events/index', 'refresh');
			 }else{
			
				 $data['title'] = $this->site_model->get_events();
				 $data['copy'] = $this->site_model->get_events();
				 $this->load->vars($data);
				 $this->load->view('edit_events_view');
			 }
	 		
	
	}
}

