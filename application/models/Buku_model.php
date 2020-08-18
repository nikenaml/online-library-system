<?php

class Buku_model extends CI_Model {

	public function read() 
	{
		$this->db->select ('*');
		$this->db->from ('buku');
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}

  	public function read_single($kode_buku) 
	{
		$this->db->select ('*');
		$this->db->from ('buku');
		$this->db->where ('kode_buku', $kode_buku);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

	public function insert($insert_data) 
	{
		$hasil = $this->db->insert('buku', $insert_data);
		return $hasil;
	}

	public function update($kode_buku, $update_data) 
	{
		$this->db->where('kode_buku', $kode_buku);
		$hasil = $this->db->update('buku', $update_data);
		return $hasil;
	}

	public function delete($kode_buku) 
	{
		$this->db->where('kode_buku', $kode_buku);
		$hasil = $this->db->delete('buku');
		return $hasil;
	}

}
