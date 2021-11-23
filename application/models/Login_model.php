<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	private $_table = "pengguna";

	public function masuk(){
		$post = $this->input->post();

		$this->db->where('username', $post["namaPengguna"]);
		$pengguna = $this->db->get($this->_table)->row();

		if($pengguna) {
			$cek = password_verify($post["sandiPengguna"], $pengguna->password);
			if($cek){
				$this->session->set_userdata(['pemain' => $pengguna->id]);
				$this->session->set_userdata(['user_logged' => $pengguna]);
				$this->session->set_flashdata('sukses', 'Anda <b>berhasil</b> masuk ke TicTacToe! Mohon menunggu beberapa saat.');
				return true;
			}
		}
		$this->session->set_flashdata('salah', 'Nama atau sandi yang Anda masukkan <b>salah!</b>');
		return false;
	}

	public function belumMasuk(){
		return $this->session->userdata('user_logged') === null;
	}

	public function aktif(){
		$this->db->set('aktif',1);
		$this->db->where('id',$this->session->userdata('pemain'));
		$this->db->update($this->_table);
	}

	public function nonaktif(){
		$this->db->set('aktif',0);
		$this->db->where('id',$this->session->userdata('pemain'));
		$this->db->update($this->_table);
	}
}
