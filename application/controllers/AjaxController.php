<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AjaxController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}


	public function getCommittees()
	{
		$country = $this->session->userdata('country');
		$this->load->model('vote_model');
		$committees=$this->vote_model->getCommittees($country);

		echo json_encode($committees);

	}

	public function getCommitteesOpt()
	{
		$country = $_POST['country'];
		$this->load->model('vote_model');
		$committees=$this->vote_model->getCommittees($country);

		echo json_encode($committees);

	}


	public function getCandidates()
	{
		$this->load->model('vote_model');
		//$candidates=$this->vote_model->getCandidates(1,1);
		$country=$this->session->userdata('country');
		$candidates=$this->vote_model->getCandidates($_POST['committee'],$country);
	

		echo json_encode($candidates);
	}



	public function countryList()
	{
		$this->load->model('user_model');

		$country=$this->user_model->getcountry();

		echo json_encode($country);
	}

	public function verifyVote()
	{
		$user = $this->session->userdata('iduser');
		$this->load->model('vote_model');

		$verify = $this->vote_model->verifyPreviousVote($user, $_POST['committee']);
		//$verify = $this->vote_model->verifyPreviousVote(2, 1);

		echo json_encode($verify);
	}

	public function vote()
	{
		$user = $this->session->userdata('iduser');
		$candidate = $_POST['candidate'];
		$committee = $_POST['committee'];
		$date = date('Y-m-d H:i:s');


		$data= array(
			'iduser'=>$user,
			'idCandidate'=>$candidate,
			'date' =>$date,
			'idCommittee'=>$committee
			);

		$this->load->model('vote_model');
		$this->vote_model->setVote($data);
	}

	public function getChartCommittee()
	{	
		$committee=$_POST['committee'];
		$country=$_POST['country'];
		$this->load->model('vote_model');
		$data = $this->vote_model->getCandidateChart($committee, $country);

		//$data = $this->vote_model->getCandidateChart(1, 1);

		echo json_encode($data);
	}
}

/* End of file AjaxController.php */
/* Location: ./application/controllers/AjaxController.php */