<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ibu extends CI_Controller {

	function __construct()
  	{
        parent::__construct();
        $this->load->model("ibu_model");
        if(!$this->session->userdata('username'))
        {
        	redirect('login');
        }
  	}

	public function index()
	{
		redirect("ibu/read");
	}

	public function read()
	{
		$view_data = array();

		$daftar_ibu = $this->ibu_model->read();
		$view_data['daftar_ibu'] = $daftar_ibu;

		$view_data['body_page'] = 'ibu_read';
		$this->smartie->view("template/index", $view_data);
	}

	public function insert()
	{
		$view_data['body_page'] = 'ibu_insert';
		$this->smartie->view("template/index", $view_data);

		//$this->load->view("ibu_insert");
	}

	public function insert_action()
	{
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('umur_ibu', 'Umur Ibu', 'required|numeric');

        $view_data = array();
        $view_data['error'] = '';

        //validasi input benar
        if ($this->form_validation->run() == TRUE)
        {
        	//setting upload
        	$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 1024;
            $config['max_width']            = 1280;
            $config['max_height']           = 768;
            $config['overwrite']           = TRUE;
            $config['file_name']           = $this->input->post("nama_ibu");
            $this->load->library('upload', $config);

            //validasi foto salah
            if ( !$this->upload->do_upload('userfile'))
            {
                $view_data['error'] = $this->upload->display_errors();

                $view_data['body_page'] = 'ibu_insert';
				$this->smartie->view("template/index", $view_data);
                //$this->load->view('ibu_insert', $view_data);

            //validasi foto benar
            } else {
                $upload_data = $this->upload->data();
                $file_foto_ibu = $upload_data['file_name'];

                $insert_data = array();
				$insert_data['nama_ibu'] = $this->input->post("nama_ibu");
				$insert_data['umur_ibu'] = $this->input->post("umur_ibu");
				$insert_data['foto_ibu'] = $file_foto_ibu;

				$this->ibu_model->insert($insert_data);

				redirect("ibu/read");
            }

		}
		else
		{
			$this->insert();
		}


	}

	public function update($id_ibu)
	{
		$view_data = array();

		$data_ibu = $this->ibu_model->read_single($id_ibu);
		$view_data['data_ibu'] = $data_ibu;

		$view_data['body_page'] = 'ibu_update';
		$this->smartie->view("template/index", $view_data);
		//$this->load->view('ibu_update', $view_data);
	}

	public function update_action($id_ibu)
	{
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('umur_ibu', 'Umur Ibu', 'required|numeric');

        if ($this->form_validation->run() == TRUE)
        {
        	//check ada foto baru
        	if($_FILES['userfile']['name']) {

	        	//setting upload
	        	$config['upload_path']          = './uploads/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 1024;
	            $config['max_width']            = 1280;
	            $config['max_height']           = 768;
	            $config['overwrite']           = TRUE;
	            $this->load->library('upload', $config);

	            //validasi foto salah
	            if ( !$this->upload->do_upload('userfile'))
	            {
	            	$data_ibu = $this->ibu_model->read_single($id_ibu);

	                $view_data = array();
					$view_data['data_ibu'] = $data_ibu;
	                $view_data['error'] = $this->upload->display_errors();
	                $this->load->view('ibu_update', $view_data);

	            //validasi foto benar
	            } else {
	                $upload_data = $this->upload->data();
	                $file_foto_ibu = $upload_data['file_name'];

	                $update_data = array();
					$update_data['nama_ibu'] = $this->input->post("nama_ibu");
					$update_data['umur_ibu'] = $this->input->post("umur_ibu");
					$update_data['foto_ibu'] = $file_foto_ibu;
					$this->ibu_model->update($id_ibu, $update_data);

					redirect("ibu/read");
	            }

	        //jika tidak ada foto baru
	        } else {
	        	$update_data = array();
				$update_data['nama_ibu'] = $this->input->post("nama_ibu");
				$update_data['umur_ibu'] = $this->input->post("umur_ibu");
				$this->ibu_model->update($id_ibu, $update_data);

				redirect("ibu/read");
	        }

		}
		else
		{
			$this->update($id_ibu);
		}
	}

	public function delete_action($id_ibu)
	{
		$this->ibu_model->delete($id_ibu);
		$result = '<div class="alert alert-success">Berhasil Hapus Data</div>';
		$result .= '<a href="'.site_url('ibu/read').'" class="btn btn-warning"><i class="fas fa-chevron-left"></i> Kembali Daftar Ibu</a>';
		echo $result;
		//redirect("ibu/read");
	}

	public function download()
	{
		//load library excel
		$this->load->library('excel');

        $excel = $this->excel;
        $excel->setActiveSheetIndex(0)->setTitle('Export Data');

		//table header
        $excel->getActiveSheet()->setCellValue('A1', 'ID Ibu');
        $excel->getActiveSheet()->setCellValue('B1', 'Nama Ibu');
        $excel->getActiveSheet()->setCellValue('C1', 'Umur Ibu');

        //ambil data dari db
		$daftar_ibu = $this->ibu_model->read();

		//increment
		$baris = 2;
		foreach($daftar_ibu as $ibu) {
			$excel->getActiveSheet()->setCellValue('A'.$baris, $ibu['id_ibu']);
            $excel->getActiveSheet()->setCellValue('B'.$baris, $ibu['nama_ibu']);
            $excel->getActiveSheet()->setCellValue('C'.$baris, $ibu['umur_ibu']);
            $baris++;
		}

		//save file
        $filename='ibu_data.xls';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        $objWriter->save('php://output');

	}

}
