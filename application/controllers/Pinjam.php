<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	function __construct()
  {
        parent::__construct();
        $this->load->model(array("pinjam_model", "pinjam_buku_model", "mahasiswa_model", "buku_model"));

        if(!$this->session->userdata('username'))
        {
        	redirect('login');
        }
    }

	public function index()
	{
		redirect("pinjam/read");
	}

	public function read()
	{
		$view_data = array();

		$daftar_pinjam = $this->pinjam_model->read();
		$view_data['daftar_pinjam'] = $daftar_pinjam;

		$view_data['body_page'] = 'pinjam_read';
		$this->smartie->view("template/index", $view_data);
	}

	public function insert()
	{
		$view_data = array();

		$view_data['body_page'] = 'pinjam_insert';
		$this->smartie->view("template/index", $view_data);
	}

	public function insert_action()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required|numeric|callback_nim_check');
		$this->form_validation->set_rules('tanggal_pinjam', 'Tanggal Pinjam', 'required');

        if ($this->form_validation->run() == TRUE)
        {
        	//insert pinjam
		    $insert_data = array();
		    $insert_data['nim'] = $this->input->post("nim");
		    $insert_data['tanggal_pinjam'] = $this->input->post("tanggal_pinjam");
			$this->pinjam_model->insert($insert_data);

			//menangkap id pinjam yang di insert
			$id_pinjam = $this->db->insert_id();
			redirect("pinjam/buku/".$id_pinjam);
		}
		else
		{
			$this->insert();
		}

	}

	public function nim_check()
	{
		//check nim
		$nim = $this->input->post("nim");
        $check_nim = $this->mahasiswa_model->read_single($nim);
        
		//if nim exist
    	if(!empty($check_nim))
    	{
    		return TRUE;
    	}
    	else
    	{
    		$this->form_validation->set_message('nim_check', '{field} is not registered');
    		return FALSE;
    	}
	}

	public function buku($id_pinjam)
	{
		$view_data = array();

		//data peminjaman
		$data_pinjam = $this->pinjam_model->read_single($id_pinjam);
		$view_data['data_pinjam'] = $data_pinjam;

		//dafar pinjam buku
		$daftar_pinjam_buku = $this->pinjam_buku_model->read($id_pinjam);
		$view_data['daftar_pinjam_buku'] = $daftar_pinjam_buku;

		$view_data['body_page'] = 'pinjam_buku';
		$this->smartie->view("template/index", $view_data);
	}

	public function insert_buku_action($id_pinjam)
	{
		$this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required|numeric|callback_buku_check');

        if ($this->form_validation->run() == TRUE)
        {
        	$kode_buku = $this->input->post("kode_buku");

        	//get stok buku
			$data_buku = $this->buku_model->read_single($kode_buku);
			$stok_buku = $data_buku['stok_buku'];

			//check stok exist
			if($stok_buku > 1) {
				
	        	//insert pinjam
			    $insert_data = array();
			    $insert_data['id_pinjam'] = $id_pinjam;
			    $insert_data['kode_buku'] = $kode_buku;
				$this->pinjam_buku_model->insert($insert_data);

				

				//update stok buku (dikurangi)
				$data_stok_buku = array();
				$data_stok_buku['stok_buku'] = $stok_buku - 1;
				$this->buku_model->update($kode_buku, $data_stok_buku);
			}
			

			redirect("pinjam/buku/".$id_pinjam);
		}
		else
		{
			$this->buku($id_pinjam);
		}

	}

	public function buku_check()
	{
		//check kode buku
		$id_pinjam = $this->input->post("id_pinjam");
		$kode_buku = $this->input->post("kode_buku");
        $check_buku = $this->buku_model->read_single($kode_buku);
        
		//if kode buku exist
    	if(!empty($check_buku))
    	{
    		//check buku yg sama sudah dipinjam 
    		$data_pinjam_buku = $this->pinjam_buku_model->check_buku($id_pinjam, $kode_buku);
    		
    		//jika buku baru dipinjam
    		if(empty($data_pinjam_buku))
    		{
    			return TRUE;
    		}
    		else
    		{
    			$this->form_validation->set_message('buku_check', '{field} sudah dipinjam');
    			return FALSE;
    		}
    		
    	}
    	else
    	{
    		$this->form_validation->set_message('buku_check', '{field} is not registered');
    		return FALSE;
    	}
	}

	//modal
	public function report()
	{
		$view_data = array();

		$daftar_pinjam = $this->pinjam_model->report();
		$view_data['daftar_pinjam'] = $daftar_pinjam;

		$view_data['body_page'] = 'pinjam_report';
		$this->smartie->view("template/index", $view_data);
	}

	//modal
	public function chart()
    {
    	$view_data = array();

		$daftar_pinjam = $this->pinjam_model->report();
		$view_data['daftar_pinjam'] = $daftar_pinjam;

		$view_data['body_page'] = 'pinjam_chart';
        $this->smartie->view("template/index", $view_data);
    }

}
