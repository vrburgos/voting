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

		$query= $this->db->get('usuario'); 

		if ($query->num_rows()>0) 
		{

			$userData = $this->db->query('') 
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}

	public function setUser($user,$passwor)
	{
		$data= array(
			'user'=>$user,
			'password'=>$password
			);
		$query= $this->db->insert('user',$data)
	}

	public function setPerson($data)
	{

	}


}

/* End of file User_Model.php */
/* Location: ./application/models/User_Model.php */