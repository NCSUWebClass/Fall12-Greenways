<?php
class Site_model extends CI_Model {
	
		var $title ='';
		var $copy ='';
		var $window ='';
		
		var $gallery_path;
		var $gallery_path_url;
		
		
		function __construct()
		{
			parent::__construct();
			
			$this->gallery_path = realpath(APPPATH . '../uploadimage/');
			$this->gallery_path_url = base_url().'/uploadsimage/';
			
		}
		function closeWindow() {
			$this->window.close();
		}
		function add_events() 
		{
			$data = array(
							'title' => $this->input->post('title'),
							'copy' => $this->input->post('copy')
							);
			$this->db->insert('events', $data);
		}
		function get_photos() 
		{
			$query = $this->db->order_by('id', 'desc');
			$query = $this->db->get('homepage');
			
			return $query->result();
		}
		function get_records() {
			$query = $this->db->order_by('id', 'desc');
			$query = $this->db->get('happening');
			return $query->result();
		}
		function get_events() {
			$query = $this->db->order_by('id', 'desc');
			$query = $this->db->get('events');
			return $query->result();
		}
		function updateEvent() {				
					$data = array(
						'title' => $this->input->post('title'),
						'copy' => $this->input->post('copy')
					);
					$this->db->where('id', $_POST['id']);
					$this->db->update('events', $data);	
	  	
								
	}
		
		function updateHappening() {				
					$data = array(
						'title' => $this->input->post('title'),
						'copy' => $this->input->post('copy'),
						'image' => $this->input->post('image')
					);
					$this->db->where('id', $_POST['id']);
					$this->db->update('happening', $data);	
	  	
								
	}
		
		function add_record($data) {
			
					
			if (empty($_FILES['userfile']['name'])) {
				$data = array(
								'title' => $this->input->post('title'),
								'copy' => $this->input->post('copy')
							);
						
						$this->db->insert('happening', $data);
				
			}
			else {
						$config = array(
							'allowed_types' => 'jpg|jpeg|gif|png',
							'upload_path' => $this->gallery_path,
							'max_size' => 600,
							'max_width' => 1200,
							'max_height' => 1000
							
						);
																		
						$this->load->library('upload', $config);
						
						if (!$this->upload->do_upload()) {
								$error = array('error' => $this->upload->display_errors());
								$this->load->view('upload_failure_view', $error);
						
						} else {
						
								$this->upload->do_upload();
								$image_data = $this->upload->data();
								
								$img_array = array(
													'source_image' => $image_data['full_path'],
													'new_image' => $this->gallery_path . '/thumbs',
													'maintain_ratio' => true,
													'width' => 450,
													'height' => 380
												);
								$this->load->library('image_lib', $img_array);
								$this->image_lib->resize();					
							
								$imageName = $this->upload->data();
					
								$image = $imageName['file_name'];
													
										$data = array(
														'title' => $this->input->post('title'),
														'copy' => $this->input->post('copy'),
														'image' => $image
													);
												
								$this->db->insert('happening', $data);
						
							}
						
								
								
						
				}
	}


		function delete_row() {
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('happening');
		}
		function delete_events_row() {
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('events');
		}

}



?>