<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('overview_model');
		if($this->login_model->belumMasuk()) redirect(site_url('admin/login'));
	}

	public function index()
	{
		$data['info'] = $this->overview_model->tabel();
		$data['pemain'] = $this->overview_model->pemain();
		$data['ajak'] = $this->overview_model->ajak();
		$data['kirim'] = $this->overview_model->kirim();
		if($this->overview_model->sesi()){
			$data['sesi'] = $this->overview_model->sesi();
			$data['sesi']['ketersediaan'] = 1;
		}else{
			$data['sesi']['ketersediaan'] = 0;
		}

		$this->load->view('admin/overview',$data);
	}

	public function ajak($id){
		if($this->overview_model->cek($id)){
			$this->overview_model->kirim_ajakan($id);
		}

		redirect('admin/overview');
	}

	public function terima($id){
		if($this->overview_model->cek_ajakan(base64_decode($id))){
			$this->overview_model->terima_ajakan(base64_decode($id));
			redirect('admin/gim/gim/'.$id);
		}else{
			redirect('admin/overview');
		}
	}

	public function tolak($id){
		$this->overview_model->tolak_ajakan(base64_decode($id));
		redirect('admin/overview');
	}
}
