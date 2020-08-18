<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
  {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('encryption');
  }

	public function index()
	{
		/*
		$password = '12345';
		echo md5($password);
		$this->encryption->encrypt($password);
		die;
		*/
		$this->smartie->view("login");
	}

	public function login_action()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|callback_password_check');

    if ($this->form_validation->run() === TRUE)
    {
			redirect("pinjam/chart");
		}
		else
		{
			$this->index();
		}

	}

	public function password_check()
	{
		//get input from login
    $username = $this->input->post("username");
    $password = $this->input->post("password");

    	//get password from db using username
		$data_user = $this->user_model->read_single($username);
		$encrypt_password = $data_user['password'];
		$decrypt_password = $this->encryption->decrypt($encrypt_password);

		//match password login vs password db
		if($password == $decrypt_password)
		{
			//successfully login then set session
			$user_session = array('username'=>$username);
            $this->session->set_userdata($user_session);

			return TRUE;
		}
		else
		{
			//password not match
			$this->form_validation->set_message('password_check', 'Invalid Login');
			return FALSE;
		}
	}

}
