<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => '' ));
        }

        public function insert_action()
        {
                $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
                $this->form_validation->set_rules('umur_ibu', 'Umur Ibu', 'required|numeric');

                //validasi input benar
                if ($this->form_validation->run() == TRUE) 
                {

                        $config['upload_path']          = './uploads/';
                        $config['allowed_types']        = 'gif|jpg|png|jpeg';
                        $config['max_size']             = 100;
                        $config['max_width']            = 1024;
                        $config['max_height']           = 768;
                        $config['overwrite']          = TRUE;
                        //$config['encrypt_name']       = TRUE;
                        
                        $this->load->library('upload', $config);

                        if ( ! $this->upload->do_upload('userfile'))
                        {
                                $view_data = array('error' => $this->upload->display_errors());
                                $this->load->view('upload_form', $view_data);
                        }
                        else
                        {
                                $view_data = array('upload_data' => $this->upload->data());
                                $this->load->view('upload_success', $view_data);
                        }
\
        }
}
