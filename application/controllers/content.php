<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		# error_reporting(E_ALL);
	}
	
	function index()
	{
		$this->load->view('home');
	}
	
	
	
	
}

/* End of file content.php */
/* Location: ./application/controllers/content.php */