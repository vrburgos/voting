<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}


	public function signin($username, $password)
	{
		


		$query= $this->db->query("SELECT u.iduser, p.names, p.surnames, p.idCountry FROM user as u INNER JOIN person as p ON u.iduser = p.iduser WHERE u.username='".$username."' AND u.password='".$password."'" ); 

		if ($query->num_rows() > 0) 
		{ 
			return $query->row_array();

			
		}
		else
		{
			return false;
		}
	}

	public function setUser($user,$password)
	{
		$data=array(
			'username'=>$user,
			'password'=>$password
			);


		$query= $this->db->insert('user',$data);
		
		$id = $this->db->insert_id();
		
		/*$this->db->where('iduser',$id)
		$user = $this->db->get('user');
		*/
		//return $query->row_array();
		return $id;
	}

	public function setPerson($personData)
	{
		$query=$this->db->insert('person',$personData);


	}


	public function getCountry()
	{
		$query=$this->db->get('country');
		return $query->result_array();
	}


}

/* End of file User_Model.php */
/* Location: ./application/models/User_Model.php */