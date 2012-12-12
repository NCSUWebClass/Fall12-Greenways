<?php

class Gallery extends CI_Controller {

	public function index()
	{
			
	
		    $this->load->library('pagination');

			$this->load->model('gallery_model');
			
		   $per_page = 4;
		   $total = $this->gallery_model->count_entries();
		   
		
		   $base_url = site_url('gallery/index');
		   $config['base_url'] = $base_url;
		   $config['total_rows'] = $total;
		   $config['per_page'] = $per_page;
		   $config['uri_segment'] = '3';
		   $config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';
		
		   $this->pagination->initialize($config);
		    
			$data['entries'] = $this->gallery_model->get_photos($per_page, $this->uri->segment(3));
			$this->load->view('gallery_view', $data);
	}
}
