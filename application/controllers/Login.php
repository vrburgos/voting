<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('login');
		
	}

	public function signup()
	{
		$this->load->view('signup');

	}

	public function register()
	{
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */