<?php

class Ibu_model extends CI_Model {

	public function read() 
	{
		$this->db->select ('*');
		$this->db->from ('ibu');
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}

  	public function read_single($id_ibu) 
	{
		$this->db->select ('*');
		$this->db->from ('ibu');
		$this->db->where ('id_ibu', $id_ibu);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

	public function insert($insert_data) 
	{
		$hasil = $this->db->insert('ibu', $insert_data);
		return $hasil;
	}

	public function update($id_ibu, $update_data) 
	{
		$this->db->where('id_ibu', $id_ibu);
		$hasil = $this->db->update('ibu', $update_data);
		return $hasil;
	}

	public function delete($id_ibu) 
	{
		$this->db->where('id_ibu', $id_ibu);
		$hasil = $this->db->delete('ibu');
		return $hasil;
	}

}
