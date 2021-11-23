<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model {

	private $_table = 'pengguna';

	public function cek(){
		$post = $this->input->post();
		$cekNama = $this->db->get_where($this->_table,array('nama'=>$post["nama"]))->num_rows() > 0;
		$cekUser = $this->db->get_where($this->_table,array('username'=>$post["namaPengguna"]))->num_rows() > 0;

		if($cekNama || $cekUser){
			$this->session->set_flashdata('gagal', 'Nama Lengkap atau Nama Pengguna yang Anda masukkan <b>telah terdaftar!</b>');
			return false;
		}
		else{
			return true;
		}
	}

	public function daftar(){
		$post = $this->input->post();
		$this->nama = $post['nama'];
		$this->menang = 0;
		$this->kalah = 0;
		$this->seri = 0;
		$this->foto = $post['foto'];
		$this->username = str_replace(' ','_',$post['namaPengguna']);
		$this->password = password_hash($post['sandiPengguna'],PASSWORD_DEFAULT);
		$this->db->insert($this->_table,$this);

		$this->session->set_flashdata('berhasil', 'Akun anda telah <b>berhasil didaftarkan!</b> Silakan mencoba masuk ke sistem.');
	}
}
