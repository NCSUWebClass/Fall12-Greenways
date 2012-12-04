<?php
class Gallery_model extends CI_Model {

	function __construct()
		{
			// Call the Model constructor
			parent::__construct();
			
	
		}
	function count_entries()
		 {
		  return $this->db->count_all_results('gallery');
		 }	
	
	function get_photos($limit = NULL, $offset = NULL) 
		{
			$this->db->limit($limit, $offset);

			$query = $this->db->order_by('id', 'desc');
			$query = $this->db->get_where('gallery', array('approved' => 1));
		
			return $query->result();
		}
	
	function get_all_photos() 
		{
			$query = $this->db->order_by('id', 'desc');
			$query = $this->db->get('gallery');
			
			return $query->result();
		}

	function add_photos($data) {				
				$data = array(
					'caption' => $this->input->post('caption'),
					'image' => $this->input->post('image')
					);
				$this->db->insert('gallery', $data);				
	}
	function updateEntry() {				
					$data = array(
						'caption' => $this->input->post('caption'),
						'image' => $this->input->post('image')
					);
					$this->db->where('id', $_POST['id']);
					$this->db->update('gallery', $data);	
	  	
								
	}
	function update_row()
		{
			
			 $this->db->where('id', $this->uri->segment(3));
			 $this->db->set('approved', 1);
			 $this->db->update('gallery');
			
			
		}
	

	function delete_row() 
		{
			$this->db->where('id', $this->uri->segment(3));
			$this->db->delete('gallery');
		}
				
	/*	function is_logged_in()
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