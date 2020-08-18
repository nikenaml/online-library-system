<?php

class Chart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('username'))
        {
            redirect('login');
        }
    }

    public function index()
    {
        $view_data['body_page'] = 'chart';
        $this->smartie->view("template/index", $view_data);

        //$this->load->view('chart');
    }

    public function pahlawan_chart()
    {
    	//load model : pahlawan
    	$this->load->model('pahlawan_model');

    	//ambil data pahlawan dari db
    	$daftar_pahlawan = $this->pahlawan_model->read();

    	//lempar data pahlawan ke view
  		$view_data = array();
  		$view_data['daftar_pahlawan'] = $daftar_pahlawan;

		$view_data['body_page'] = 'pahlawan_chart';
        $this->smartie->view("template/index", $view_data);
        //$this->load->view("column_chart", $view_data);
    }

}
