<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_model');
		$this->load->model('overview_model');
		if($this->login_model->belumMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data['info'] = $this->overview_model->tabel();
		$data['profil'] = $this->profil_model->profil();

		$this->load->view('admin/profil',$data);
	}

	public function ubahData(){
		$profil = $this->profil_model;
		$profil->ubahData();
		redirect('admin/profil');
	}

	public function ubahFoto(){
		$profil = $this->profil_model;
		$profil->uploadFoto();
		redirect('admin/profil');
	}

	public function hapus(){
		$profil = $this->profil_model;
		$profil->hapus();
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
