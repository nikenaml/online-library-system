<?php

class Pinjam_model extends CI_Model {

	public function read() 
	{
		$this->db->select ('pinjam.*');
		$this->db->select ('mahasiswa.*');
		$this->db->from ('pinjam');
		$this->db->join ('mahasiswa', 'pinjam.nim = mahasiswa.nim');
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}

  	public function read_single($id_pinjam) 
	{
		$this->db->select ('pinjam.*');
		$this->db->select ('mahasiswa.*');
		$this->db->from ('pinjam');
		$this->db->join ('mahasiswa', 'pinjam.nim = mahasiswa.nim');
		$this->db->where ('id_pinjam', $id_pinjam);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

  	//modal uas
		  	public function report() 
			{
				$query = $this->db->query ('SELECT pinjam.tanggal_pinjam, COUNT(pinjam_buku.kode_buku) as total_buku
											FROM pinjam_buku
											JOIN pinjam on pinjam_buku.id_pinjam = pinjam.id_pinjam
											GROUP BY pinjam.tanggal_pinjam
											ORDER BY COUNT(pinjam_buku.kode_buku) desc');
				$hasil = $query->result_array();
				return $hasil;
		  	}

	public function insert($insert_data) 
	{
		$hasil = $this->db->insert('pinjam', $insert_data);
		return $hasil;
	}

	public function update($id_pinjam, $update_data) 
	{
		$this->db->where('id_pinjam', $id_pinjam);
		$hasil = $this->db->update('pinjam', $update_data);
		return $hasil;
	}

	public function delete($id_pinjam) 
	{
		$this->db->where('id_pinjam', $id_pinjam);
		$hasil = $this->db->delete('pinjam');
		return $hasil;
	}

}
