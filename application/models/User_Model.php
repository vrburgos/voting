<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	

	public function __construct()
	{
		parent::__construct();
		
	}


	public function signin($username, $password)
	{
		
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query= $this->db->get('user'); 

		if ($query->num_rows() > 0) 
		{ 
			$user=$query->row_array();

			$id= $user['iduser'];

			$this->db->where('iduser',$id);

			$userData = $this->db->get('userdata');
			return $userData->row_array();
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


}

/* End of file User_Model.php */
/* Location: ./application/models/User_Model.php */