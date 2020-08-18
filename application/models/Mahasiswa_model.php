<?php

class Mahasiswa_model extends CI_Model {

	public function read() 
	{
		$this->db->select ('*');
		$this->db->from ('mahasiswa');
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}

  	public function read_single($nim) 
	{
		$this->db->select ('*');
		$this->db->from ('mahasiswa');
		$this->db->where ('nim', $nim);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

	public function insert($insert_data) 
	{
		$hasil = $this->db->insert('mahasiswa', $insert_data);
		return $hasil;
	}

	public function update($nim, $update_data) 
	{
		$this->db->where('nim', $nim);
		$hasil = $this->db->update('mahasiswa', $update_data);
		return $hasil;
	}

	public function delete($nim) 
	{
		$this->db->where('nim', $nim);
		$hasil = $this->db->delete('mahasiswa');
		return $hasil;
	}

}
