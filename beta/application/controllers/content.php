<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	
	function index()
	{
		$this->load->view('common/header');
		$this->load->view('home');
		$this->load->view('common/footer');
	}
	
	function about()
	{
		$this->load->view('common/header');
		$this->load->view('about');
		$this->load->view('common/footer');	
	}
	
	function team()
	{
		$this->load->view('common/header');
		$this->load->view('team');
		$this->load->view('common/footer');		
	}
	
	function fleet($slug = "")
	{
		$this->load->view('common/header');
		
		if($slug){
			$data['fleet'] = $this->data_model->get_fleet($slug);
			$data['next'] = $this->data_model->get_next_fleet_key($slug);
			$this->load->view('fleet/detail',$data);
		}else{
			$data['fleet'] = $this->data_model->get_fleet();
			$this->load->view('fleet/list',$data);
		}
		$this->load->view('common/footer');	
	}
	
	function services()
	{
		$this->load->view('common/header');
		$this->load->view('services');
		$this->load->view('common/footer');		
	}
	
	function projects()
	{
		$data['projects'] = $this->data_model->get_projects();
		$data['total'] = count($data['projects']);
		$this->load->view('common/header');
		$this->load->view('projects',$data);
		$this->load->view('common/footer');		
	}
	
	function contact()
	{
		$data['captcha'] = $this->generate_captcha();
		$this->load->view('common/header');
		$this->load->view('contact',$data);
		$this->load->view('common/footer');		
	}
	
	function generate_captcha()
    {
        $this->load->helper('captcha');

        # Setup vals to pass into the create_captcha function
        $vals = array(
            'img_path' => CAPTCHA_PATH,
            'img_url' => base_url() . CAPTCHA_PATH,
            'img_height' => 35
        );
        # Generate the captcha
        $captcha = create_captcha($vals);
        # Store the captcha value in a session to retrieve later
        $this->session->set_userdata('captcha_word', $captcha['word']);
        return $captcha;
    }
	
	function refresh_captcha()
    {
        $captcha = $this->generate_captcha();
        echo $captcha['image'];
    }
	 
	
	
	function app_404()
	{
		$this->load->view('common/header');
		$this->load->view('app_404');
		$this->load->view('common/footer');		
	}
	
	function sendcontact()
	{
		$name = $this->input->post('name',true);
		$company = $this->input->post('company',true);
		$email = $this->input->post('email',true);
		$phone = $this->input->post('phone',true);
		$msg = $this->input->post('message');
		$captcha = $this->input->post('captcha',true);
		

		$rules = array(
			array('field' => 'email', 'label' => 'Email', 'rules' => 'required|email'),
			array('field' => 'name', 'label' => 'Name', 'rules' => 'required'),
			array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required'),
			array('field' => 'captcha', 'label' => 'Code', 'rules' => 'required|captcha')
		);
		
		
		$errors =  $this->_validate_input($this->input->post(), $rules);
		
		if (count($errors) > 0) {
			# User input error
			echo json_encode(array(
				'ok' => false,
				'errors' => $errors
			));
			
			return;
		}else{
			# proceed with sending email
			$data_email['message'] = $this->input->post();
			$message = $this->load->view('email/contact_us',$data_email,true);
			$to = 'kaushtuv@propagate.com.au';

			
			$email_data = array(
					'to' => $to ? $to : 'info@'.DOMAIN,
					'from' => 'noreply@'.DOMAIN,
					'from_text' => 'Contact Form Inquiry - ' . SITE_NAME,
					'subject' => 'Message Received From Contact Form - '.date('d F,Y'),
					'message' => $message
					);
			if($this->_send_email($email_data)){
				  echo json_encode(array(
					  'ok' => true,
					  'errors' => ''
				  ));
				  return;
			}else{
				echo json_encode(array(
					  'ok' => false,
					  'errors' => 'contact failed'
				));
			   return;
			}
		}
	
	}
	
	
	/**
	*	@name: send_email
	*	@desc: A central function to send email
	*	@access: public
	*	@param: (array) email data
	*/
	function _send_email($data)
	{
		if(LIVE_SERVER){
			return $this->_send_email_live($data);
		}else{
			return $this->_send_email_localhost($data);
		}
	}

	/**
	*	@name: send_email_live
	*	@desc: A central function to send all email in live server
	*	@access: public
	*	@param: (array) email data
	*/
	function _send_email_live($data)
	{
		$to = '';
		$from = '';
		$cc = '';
		$bcc = '';
		$from_text = '';
		$subject = ''; 
		$message = ''; 
		$attachment = ''; 
		if($data){
			foreach($data as $key=>$val){
				switch($key){
					case 'to':
						$to = $val;
					break;
					
					case 'from':
						$from = $val;
					break;
					
					case 'cc':
						$cc = $val;
					break;
										
					case 'bcc':
						$bcc = $val;
					break;
					
					case 'from_text':
						$from_text = $val;
					break;
					
					case 'subject':
						$subject = $val;
					break;
					
					case 'message':
						$message = $val;
					break;
					
					case 'attachment':
						$attachment = $val;
					break;	
				}
				
				
			}
		
			$email_signature = $this->load->view('email/signature', isset($data) ? $data : NULL,true);
		
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			$this->email->from($from,$from_text);		
			$this->email->to($to);
			$this->email->cc($cc);
			$this->email->bcc($bcc);
			$this->email->subject($subject);
			$this->email->message($message .'<br />' . $email_signature);
			if($attachment){
				$this->email->attach($attachment);
			}
			if($this->email->send()){
				$this->email->clear(true);	
				return true;
			}else{
				return false;	
			}
					
		} else {
			return false;	
		}
		

	}
	
	/**
	*	@desc Test function to send email from localhost
	*
	*   @name send_email
	*	@access public
	*	
	*/
	function _send_email_localhost($data)
	{
		$config = Array(
		  'protocol' => 'smtp',
		  'smtp_host' => 'ssl://smtp.googlemail.com',
		  'smtp_port' => 465,
		  'smtp_user' => 'propagate.au@gmail.com', // change it to yours
		  'smtp_pass' => PROP_PWORD, // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
		);
		
		$to = '';
		$from = '';
		$cc = '';
		$bcc = '';
		$from_text = '';
		$subject = ''; 
		$message = ''; 
		$attachment = ''; 
		
		if($data){
		foreach($data as $key=>$val){
				switch($key){
					case 'to':
						$to = $val;
					break;
					
					case 'from':
						$from = $val;
					break;
					
					case 'cc':
						$cc = $val;
					break;
										
					case 'bcc':
						$bcc = $val;
					break;
					
					case 'from_text':
						$from_text = $val;
					break;
					
					case 'subject':
						$subject = $val;
					break;
					
					case 'message':
						$message = $val;
					break;
					
					case 'attachment':
						$attachment = $val;
					break;	
				}
				
				
			}
		}
		
		$email_signature = $this->load->view('email/signature', isset($data) ? $data : NULL,true);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('propagate.au@gmail.com',$from_text); // change it to yours
		$this->email->to($to);// change it to yours
		$this->email->subject($subject);
		$this->email->message($message .'<br />' . $email_signature);
				
		if($attachment){
			$this->email->attach($attachment);
		}
		if($this->email->send()){
		  	return true;
		}else{
			#show_error($this->email->print_debugger());
			return false;
		} 
	}
	
	function _validate_input($input, $rules)
	{
		$errors = array();
		foreach($rules as $rule) {
			$conditions = explode('|', $rule['rules']);
			foreach($conditions as $condition) {
				switch($condition) {
					case 'required':
							if (!isset($input[$rule['field']]) || $input[$rule['field']] == '') {
								$errors[] = array('field' => $rule['field'], 'msg' => $rule['label'] . ' is required');
							}
						break;
					case 'email':
						if (!filter_var($input[$rule['field']],FILTER_VALIDATE_EMAIL)){
							$errors[] = array('field' => $rule['field'], 'msg' => $rule['label'] . ' is invalid');	
						}
						break;
					case 'captcha':
						$captcha_word = $this->session->userdata('captcha_word');
						if ($captcha_word != $input['captcha']) {
							$errors[] = array('field' => $rule['field'], 'msg' => 'Wrong Code');
						}
						break;
				}
			}
		}
		return $errors;
	}
	
	
	
	
}

/* End of file content.php */
/* Location: ./application/controllers/content.php */