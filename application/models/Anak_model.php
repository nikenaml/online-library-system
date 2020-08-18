<?php

class Anak_model extends CI_Model {

	public function read()
	{
		$this->db->select ('anak.*');
		$this->db->select ('ibu.nama_ibu');
		$this->db->from ('anak');
		$this->db->join ('ibu', 'anak.id_ibu = ibu.id_ibu');
		$query = $this->db->get ();
		$hasil = $query->result_array();
		return $hasil;
  	}

  public function read_single($id_anak) 
	{
		$this->db->select ('*');
		$this->db->from ('anak');
		$this->db->where ('id_anak', $id_anak);
		$query = $this->db->get ();
		$hasil = $query->row_array();
		return $hasil;
  	}

	public function insert($insert_data)
	{
		$hasil = $this->db->insert('anak', $insert_data);
		return $hasil;
	}

	public function update($id_anak, $update_data)
	{
		$this->db->where('id_anak', $id_anak);
		$hasil = $this->db->update('anak', $update_data);
		return $hasil;
	}

	public function delete($id_anak)
	{
		$this->db->where('id_anak', $id_anak);
		$hasil = $this->db->delete('anak');
		return $hasil;
	}

}
