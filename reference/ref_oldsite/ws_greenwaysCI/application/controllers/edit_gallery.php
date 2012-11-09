<?php

class Edit_gallery extends CI_Controller {

	
	function __construct()
	{
		parent::__construct();
		
		
	}
	
	function index()
	{
		$this->load->model('gallery_model');
		
		if($query = $this->gallery_model->get_all_photos())
		{
			$data['entries'] = $query;
		}
		else { 
			$query = 0;
		}
		;
		
		$this->db->where('id', $this->uri->segment(3));
		$data['entries'] = $this->gallery_model->get_all_photos();
		$this->load->view('edit_gallery_view', $data);
	}
	function edit($id=0)
	{
		
			 if($this->input->post('caption','image')) {
					$this->gallery_model->updateEntry();
					
					redirect('admin_gallery/index', 'refresh');
			 }else{
			
				 $data['caption'] = $this->gallery_model->get_all_photos();
				 $data['image'] = $this->gallery_model->get_all_photos();
				 $this->load->vars($data);
				 $this->load->view('edit_gallery_view');
			 }
	 		
	
	}
}

