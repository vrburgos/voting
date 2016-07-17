<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vote_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getCommittees($country)
	{
		//$query = $this->db->get('committee');

		$query = $this->db->query('SELECT DISTINCT(comm.idCommittee) idCommittee, comm.name  FROM committee as comm  INNER JOIN candidate as c ON comm.idCommittee = c.idCommittee INNER JOIN country as coun ON c.idcountry= coun.idcountry WHERE c.idcountry='.$country);

		return $query->result_array();



	}

	public function getCandidates($committee, $country)
	{

		$query = $this->db->query('SELECT c.idcandidate, c.name, c.surnames, c.idcommittee, comm.name as commname FROM candidate as c INNER JOIN committee as comm ON c.idCommittee = comm.idcommittee WHERE c.idCommittee = '.$committee.' AND c.idcountry='.$country);

		return $query->result_array();
	}



	public function verifyPreviousVote($user,$committee)
	{
		$this->db->where('iduser',$user);
		$this->db->where('idCommittee',$committee);
		$query = $this->db->get('vote');


		if (($query->num_rows()) > 0)
		{
			return $response= array('exists' => 'true' );
		}
		else
		{
			return $response= array('exists' => 'false' );
		}

		//return $query->result_array();
	}

	public function setVote($data)
	{
		$this->db->insert('vote',$data);
	}

}

/* End of file Vote_model.php */
/* Location: ./application/models/Vote_model.php */