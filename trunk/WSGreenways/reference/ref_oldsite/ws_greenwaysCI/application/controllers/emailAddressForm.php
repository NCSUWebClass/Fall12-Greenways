<?php class EmailAddressForm extends CI_Controller {

var $window;
		public function index()
	{
			$this->load->view('emailAddressForm_view');
			$this->load->model('site_model');
	}

	function send() {
		
			session_start();
			$errors = '';
			$emailAddress = $this->input->post('emailAddress');
			// field name, error message, validation rules
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('emailAddress', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_error_delimiters('<span class="error">', '</span>');
			
			if($this->form_validation->run() == FALSE){
					
				
						$this->load->view('emailAddressForm_view', $errors);
					/*$this->load->view('contact_view', $errors);*/
			
			}else{
				
				$emailAddress = $this->input->post('emailAddress');
			
				//this sends information entered in form to me
				$this->email->from($emailAddress);
				/*$this->email->to('info@wsgreenways.org');*/
				$this->email->to('info@wsgreenways.org');
				$this->email->subject('Request to receive emails from WSGreenways');
				$this->email->message("I would like to receive your emails. My email is:\n $emailAddress");
				$this->email->send();
				$this->load->view('emailAddressSent_view');
				/*$this->window.opener.location.reload();*/
			}
				
			
	
	}
	
}
?>