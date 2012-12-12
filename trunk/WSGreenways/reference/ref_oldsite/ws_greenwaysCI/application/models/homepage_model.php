<?php
class Homepage_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
			/*$this->is_logged_in();*/
	
		}
		
		function get_photos() 
		{
			$query = $this->db->order_by('id', 'desc');
			$query = $this->db->get('homeimg');
			
			return $query->result();
		}
		function get_records() {
			$query = $this->db->order_by('id', 'desc');
			$query = $this->db->get('homepage');			
			return $query->result();
		}

		function updateText() {
			$data = array(
						'text' => $this->input->post('text')
					);
					$this->db->where('id', $_POST['id']);
					$this->db->update('homepage', $data);	
		}
		function add_photo($data) {
				 $config['upload_path'] = './uploadsHome/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']    = '600';
				$config['max_width']    = '1200';
				$config['max_height']    = '1000';
							
				
				$this->load->library('upload', $config);
				
				if (!$this->upload->do_upload()) {
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('upload_failure_view', $error);
				} else {
						$image_data = $this->upload->data();		    
						
						$config = array(
							'source_image' => $image_data['full_path'],
							'new_image' => $this->gallery_path . '/thumbs',
							'maintain_ration' => true,
							'width' => 420,
							'height' => 350
						);
						  
						   
						$imageName = $this->upload->data();
							
						$image = $imageName['file_name'];
						
						$data = array(
							'image' => $image
						);
						$this->db->insert('homeimg', $data);
						
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
				}
	}
	function add_records($data) {				
				$data = array(
					'text' => $this->input->post('text')
					);
				$this->db->insert('homepage', $data);				
	}

		function delete_row() {
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('homepage');
		}
		function delete_photos() {
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('homeimg');
		}
		
		/*function is_logged_in()
				{
					$is_logged_in = $this->session->userdata('is_logged_in');
					if(!isset($is_logged_in) || $is_logged_in != true)
					{
						echo 'You don\'t have permission to access this page. ';
						echo anchor('login', 'Log In'); 	
						die();		
						//$this->load->view('login_form');
					}		
				}*/
}



?>