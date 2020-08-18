<?php

class Pahlawan_model extends CI_Model {

	public function read() 
	{
		$this->db->select ('*');
		$this->db->from ('pahlawan');
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}


  	public function pahlawan_gender() 
	{
		$query = $this->db->query ('select gender, count(gender) as total from pahlawan group by gender');
		$hasil = $query->result_array();
		return $hasil;
  	}


}
