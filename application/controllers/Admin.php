<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('admin');	
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */