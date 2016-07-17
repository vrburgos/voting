<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('iduser')){
			$user = $this->session->userdata('names');
			$data = array('username' => $user);
		}
		else
		{
			$data = array('username' => '');
		}	
		
		$this->load->view('home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */