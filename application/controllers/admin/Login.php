<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
	}

	public function index()
	{
		if ($this->session->userdata('pemain') !== null){
			redirect(base_url('admin/overview'));
		}
		else if($this->input->post()){
			$this->login_model->masuk();
			$this->login_model->aktif();
		}

		$this->load->view("admin/user_login");
	}

	public function logout()
	{
		$this->login_model->nonaktif();
		$this->overview_model->hapus_ajakan();
		$this->session->sess_destroy();
		redirect(base_url('admin/login'));
	}
}
