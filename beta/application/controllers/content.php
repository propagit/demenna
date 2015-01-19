<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		# error_reporting(E_ALL);
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
		#if(1){
			$this->load->view('list');
		}else{
			$this->load->view('detail');
		}
		$this->load->view('common/footer');	
	}
	
	
	
	
}

/* End of file content.php */
/* Location: ./application/controllers/content.php */