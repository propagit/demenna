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
	
	function app_404()
	{
		$this->load->view('common/header');
		$this->load->view('app_404');
		$this->load->view('common/footer');		
	}
	
	
	
	
}

/* End of file content.php */
/* Location: ./application/controllers/content.php */