<?php

class Edit_homepage extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		
		
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
		
		$this->db->where('id', $this->uri->segment(3));
		$data['images'] = $this->homepage_model->get_records();
		$this->load->view('edit_homepage_view', $data);
	}
	function edit($id=0)
	{
		
			 if($this->input->post('text')) {
					$this->homepage_model->updateText();
					
					redirect('admin_homepage/index', 'refresh');
			 }else{
			
				 $data['text'] = $this->homepage_model->get_records();
				
				 $this->load->vars($data);
				 $this->load->view('edit_homepage_view');
			 }
	 		
	
	}
}

