<?php class Email extends CI_Controller {

	var $gallery_path;
	var $gallery_path_url;
	
	
	function index(){
	
			parent::CI_Controller();
		
			$this->gallery_path = realpath(APPPATH . '../uploads/');
			$this->gallery_path_url = base_url().'uploads/';
			
		}

	function send(){
			session_start();
			$errors = '';
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$message = $this->input->post('message');
			$volunteer = $this->input->post('volunteer');
			$caption = $this->input->post('caption');
			$userfile = $this->input->post('userfile');
			$code = $this->input->post('6_letters_code');
			
			//For Form Validaiton
			$this->load->library('form_validation');
			// field name, error message, validation rules
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'trim');
			$this->form_validation->set_rules('volunteer', 'Volunteer', '');
			$this->form_validation->set_rules('caption', 'Message', 'trim');
			$this->form_validation->set_rules('userfile', 'File', 'trim');
			$this->form_validation->set_rules('6_letters_code', 'captcha', 'trim|required|min_length[6]|max_length[6]|matches[above captcha]');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>
	');
				
			// Run form validation		
		 		
		
			
			if($this->form_validation->run() == FALSE & empty($_SESSION['6_letters_code'] ) ||
				  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
					{
						$errors = "The captcha code does not match";
						$this->load->view('contact_view', $errors);
					} 
					// display confirmation web page and send email
					else { 
					// Form validation success
						//For the upload of photos
									$this->load->model('site_model');
									$config['upload_path'] = './uploads/';
									$config['allowed_types'] = 'gif|jpg|png|jpeg';
									$config['maintain_ratio'] = true;
									$config['max_size']    = '600';
									$config['max_width']    = '1200';
									$config['max_height']    = '1000';
									
									$this->load->library('upload', $config);
									
									if($_FILES['userfile']['name']) {
										$this->upload->do_upload();
										$image_data = $this->upload->data();	
													
								   		$this->load->library('image_lib');
										
										/*to create a thumbnail*/
										$config = array(
												'source_image' => $image_data['full_path'],
												'new_image' => $this->gallery_path_url . 'uploads/thumbs',
												'maintain_ratio' => true,
												'width' => 100,
												'height' => 100
												);
												
										$this->image_lib->initialize($config);
										$this->image_lib->resize();
											
										/*to create a reduced copy*/
										$config = array(
												'source_image' => $image_data['full_path'],
												'new_image' => $this->gallery_path_url . 'uploads/copy',
												'maintain_ratio' => true,
												'width' => 420,
												'height' => 320
										);
									   
										$this->image_lib->initialize($config);
										$this->image_lib->resize();
										
										$imageName = $this->upload->data();
											
										$image = $imageName['file_name'];	
										
										//Added this code to ADD TO DATABASE
										$data = array(
												'caption' => $this->input->post('caption'),
												'image' => $image);
										$this->db->insert('gallery', $data);
					} 
					
					// Use PHP's internal $_FILES superglobal to test for valid
						if ($_FILES['userfile']['name']) {
							$errors = $this->upload->display_errors();
								if ($errors) {
										die($errors);
								}
							$upload_data = $this->upload->data();
					// Attach the uploaded file if it is set
							if ($upload_data) {
							$image .= "FILE WAS UPLOADED:".$upload_data['file_name'] . "\n";
							$this->email->attach($upload_data['full_path']);
							} 
					
						}
						
				// set email class settings
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$message = $this->input->post('message');
				$volunteer = $this->input->post('volunteer');
				$caption = $this->input->post('caption');
				$userfile = $this->input->post('userfile');
				$image = $this->input->post('image');
				$code = $this->input->post('6_letters_code');
			
				
				//this sends information entered in form to me
				$this->email->from($email, $name);
				$this->email->to('wilkinsonmarcia@bellsouth.net', 'rmashburn@earthlink.net', 'wsgreenways@gmail.com');
				$this->email->subject('Comment from WSGreenways contact form');
				$this->email->message("Name: $name\n" .  "Email: $email\n". "Message: $message\n" ."Do you want to volunteer: $volunteer\n" ."Photo caption: $caption\n");
			 
			
			
			if($this->email->send())
			{
				
				$this->load->view('email_confirmation_view');
			}
			
			else
			{				
						$this->load->view('contact_view', $errors);
			}
			 	
		} 
	
	}
	
	
}
?>