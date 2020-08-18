<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anak extends CI_Controller {

	function __construct()
  {
        parent::__construct();
        $this->load->model(array("ibu_model", "anak_model"));

        if(!$this->session->userdata('username'))
        {
        	redirect('login');
        }
    }

	public function index()
	{
		redirect("anak/read");
	}

	public function read()
	{
		$view_data = array();

		$daftar_anak = $this->anak_model->read();
		$view_data['daftar_anak'] = $daftar_anak;

		$view_data['body_page'] = 'anak_read';
		$this->smartie->view("template/index", $view_data);
	}

	public function insert()
	{
		$view_data = array();

		$daftar_ibu = $this->ibu_model->read();
		$view_data['daftar_ibu'] = $daftar_ibu;

		$view_data['body_page'] = 'anak_insert';
		$this->smartie->view("template/index", $view_data);
	}

	public function insert_action()
	{
		$this->form_validation->set_rules('id_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('nama_anak', 'Nama Anak', 'required');
        $this->form_validation->set_rules('gender_anak', 'Gender Anak', 'required');

        if ($this->form_validation->run() == TRUE)
        {
        	//insert data to db
		    $insert_data = array();
		    $insert_data['id_ibu'] = $this->input->post("id_ibu");
			$insert_data['nama_anak'] = $this->input->post("nama_anak");
			$insert_data['gender_anak'] = $this->input->post("gender_anak");

			$this->anak_model->insert($insert_data);
			redirect("anak/read");
		}
		else
		{
			$this->insert();
		}

	}

	public function update($id_anak)
	{
		$view_data = array();

		$daftar_ibu = $this->ibu_model->read();
		$view_data['daftar_ibu'] = $daftar_ibu;

		$data_anak = $this->anak_model->read_single($id_anak);
		$view_data['data_anak'] = $data_anak;

		$view_data['body_page'] = 'anak_update';
		$this->smartie->view("template/index", $view_data);
	}

	public function update_action($id_anak)
	{
		$this->form_validation->set_rules('id_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('nama_anak', 'Nama Anak', 'required');
        $this->form_validation->set_rules('gender_anak', 'Gender Anak', 'required');

        if ($this->form_validation->run() == TRUE)
        {
        	$update_data = array();
        	$update_data['id_ibu'] = $this->input->post("id_ibu");
			$update_data['nama_anak'] = $this->input->post("nama_anak");
			$update_data['gender_anak'] = $this->input->post("gender_anak");
			$this->anak_model->update($id_anak, $update_data);

			redirect("anak/read");

		}
		else
		{
			$this->update($id_anak);
		}
	}

	public function delete_action($id_anak)
	{
		$this->anak_model->delete($id_anak);
		redirect("anak/read");
	}

}
