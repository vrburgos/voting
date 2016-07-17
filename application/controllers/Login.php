<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		if ($this->session->userdata('iduser')) {

			redirect('home');
		}

		$this->load->view('login');
		
	}

	public function signin()
	{
		$this->load->model('user_model');

		$user=$this->user_model->signin($_POST['username'],md5($_POST['password']));
			if($user==false)
			{
				redirect('login#bad_password');
				
			}else{
				$data= array
					(
						'iduser'=>$user['iduser'],
						'names'=>$user['names'],
						'surnames'=>$user['surnames'],
						'country'=>$user['idCountry']
					);
				$this->session->set_userdata($data);
				
				//print_r($data);
				redirect('home');
			}

	}


	public function signup()
	{
		$this->load->view('signup');

	}

	public function register()
	{
		$this->load->model('user_model');
		$user=$this->user_model->setUser($_POST['username'],md5($_POST['password']));

		$user_id = $user['iduser'];

		$data = array
		(
			'names' =>$_POST['name'],
			'surnames' =>$_POST['surname'],
			'email' =>$_POST['email'],
			'id_document'=>$_POST['document'],
			'iduser'=>$user,
			'idcountry'=>$_POST['sel1']
		);


		$person=$this->user_model->setPerson($data);
		
		$dataUser= array
					(
						'iduser'=>$data['iduser'],
						'names'=>$data['names'],
						'surnames'=>$data['surnames'],
						'country'=>$data['idcountry']
					);
		$this->session->set_userdata($dataUser);

		redirect('home');
			
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home','refresh');
	}



}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */