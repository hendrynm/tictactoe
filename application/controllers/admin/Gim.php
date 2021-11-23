<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gim extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('gim_model');
		$this->load->model('overview_model');
		if($this->login_model->belumMasuk()) redirect(site_url('admin/login'));
	}

	public function gim($id){
		if($this->gim_model->cek(base64_decode($id))) {
			$data['tabel'] = $this->gim_model->tabel(base64_decode($id));
			$data['info'] = $this->overview_model->tabel();

			$this->load->view('admin/gim',$data);
		} else{
			redirect('admin/overview');
		}
	}

	public function tambah($id){
		$gim = $this->gim_model;
		$sisaKotak = $gim->sisaKotak(base64_decode($id));

		if($sisaKotak>0){
			$gim->tambah(base64_decode($id));
			$gim->pemenang(base64_decode($id));
			$gim->ubahGiliran(base64_decode($id));
		}

		redirect('admin/gim/gim/'.$id);
	}

	public function reset($id){
		$gim = $this->gim_model;
		sleep(3);
		if($gim->cek(base64_decode($id))){
			$gim->simpan(base64_decode($id));
			$gim->reset(base64_decode($id));
		}

		redirect('admin/gim/gim/'.$id);
	}

	public function keluar($id){
		$gim = $this->gim_model;

		if($gim->cek(base64_decode($id))){
			$gim->simpan(base64_decode($id));
			$gim->hapus(base64_decode($id));
		}

		redirect('admin/overview');
	}
}
