<?php

class User_model extends CI_Model {

	public function read()
	{
		$this->db->select ('*');
		$this->db->from ('user');
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}

  public function read_single($username) 
	{
		$this->db->select ('*');
		$this->db->from ('user');
		$this->db->where ('username', $username);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

}
