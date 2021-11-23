<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_model');
		$this->load->model('overview_model');
	}

	public function index()
	{
		return $this->load->view('admin/daftar');
	}

	public function tambah(){
		$daftar = $this->daftar_model;

		if($daftar->cek()){
			$daftar->daftar();
			redirect('admin/login');
		}else{
			redirect('admin/daftar');
		}
	}

}
