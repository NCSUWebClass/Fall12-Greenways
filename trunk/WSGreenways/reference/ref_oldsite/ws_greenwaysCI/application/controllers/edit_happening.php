<?php

class Edit_happening extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		
		
	}
	
	function index()
	{
		$this->load->model('site_model');
		
		if($query = $this->site_model->get_records())
		{
			$data['images'] = $query;
		}
		else { 
			$query = 0;
		}
		;
		
		$this->db->where('id', $this->uri->segment(3));
		$data['images'] = $this->site_model->get_records();
		$this->load->view('edit_happening_view', $data);
	}
	function edit($id=0)
	{
		
			 if($this->input->post('title','copy')) {
					$this->site_model->updateHappening();
					
					redirect('admin_happening/index', 'refresh');
			 }else{
			
				 $data['title'] = $this->site_model->get_records();
				 $data['copy'] = $this->site_model->get_records();
				 $data['image'] = $this->site_model->get_records();
				 $this->load->vars($data);
				 $this->load->view('edit_happening_view');
			 }
	 		
	
	}
}

