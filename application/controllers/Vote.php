<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vote extends CI_Controller {

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
			redirect('login');
		}	
		
		$this->load->view('vote',$data);
	}

}

/* End of file Vote.php */
/* Location: ./application/controllers/Vote.php */