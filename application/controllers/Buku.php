<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct()
  	{
        parent::__construct();
        $this->load->model("buku_model");
        if(!$this->session->userdata('username'))
        {
        	redirect('login');
        }
  	}

	public function index()
	{
		redirect("buku/read");
	}

	public function read()
	{
		$view_data = array();

		$daftar_buku = $this->buku_model->read();
		$view_data['daftar_buku'] = $daftar_buku;

		$view_data['body_page'] = 'buku_read';
		$this->smartie->view("template/index", $view_data);
	}

}
