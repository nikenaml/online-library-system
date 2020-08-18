<?php

class Pinjam_buku_model extends CI_Model {

	public function read($id_pinjam) 
	{
		$this->db->select ('pinjam.*');
		$this->db->select ('buku.*');
		$this->db->from ('pinjam_buku');
		$this->db->join ('pinjam', 'pinjam_buku.id_pinjam = pinjam.id_pinjam');
		$this->db->join ('buku', 'pinjam_buku.kode_buku = buku.kode_buku');
		$this->db->where ('pinjam_buku.id_pinjam', $id_pinjam);
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}

  	public function read_single($id_pinjam) 
	{
		$this->db->select ('*');
		$this->db->from ('pinjam_buku');
		$this->db->where ('id_pinjam', $id_pinjam);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

  	public function check_buku($id_pinjam, $kode_buku) 
	{
		$this->db->select ('*');
		$this->db->from ('pinjam_buku');
		$this->db->where ('id_pinjam', $id_pinjam);
		$this->db->where ('kode_buku', $kode_buku);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

	public function insert($insert_data) 
	{
		$hasil = $this->db->insert('pinjam_buku', $insert_data);
		return $hasil;
	}

	public function update($id_pinjam, $update_data) 
	{
		$this->db->where('id_pinjam', $id_pinjam);
		$hasil = $this->db->update('pinjam_buku', $update_data);
		return $hasil;
	}

	public function delete($id_pinjam) 
	{
		$this->db->where('id_pinjam', $id_pinjam);
		$hasil = $this->db->delete('pinjam_buku');
		return $hasil;
	}

}
