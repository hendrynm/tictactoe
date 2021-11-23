<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model {

	private $_table = 'pengguna';

	public function profil(){
		return $this->db->get($this->_table)->row();
	}

	public function ubahData(){
		$post = $this->input->post();

		if($post["password"] == $post["ulangPassword"]){
			$cekNama = $this->db->get_where($this->_table,array('nama'=>$post["nama"]))->num_rows() <= 1;
			$cekUser = $this->db->get_where($this->_table,array('username'=>$post["namaPengguna"]))->num_rows() <= 1;

			if($cekNama && $cekUser){
				$this->nama = $post["nama"];
				$this->username = $post["username"];
				$this->password = password_hash($post["password"],PASSWORD_DEFAULT);
				$this->db->update($this->_table, $this, array('id' => $this->session->userdata('pemain')));
				return $this->session->set_flashdata('berhasil', 'Perubahan data Anda <b>telah berhasil</b> tersimpan!');
			}else{
				return $this->session->set_flashdata('gagal', 'Perubahan data Anda <b>telah gagal</b> karena data telah digunakan oleh pengguna lain. Silakan ubah dengan data yang lain!');
			}
		}else{
			return $this->session->set_flashdata('gagal', 'Perubahan data Anda <b>telah gagal</b> karena kata sandi yang Anda masukkan tidak cocok!');
		}
	}

	public function uploadFoto(){
		$data['orang'] = $this->db->where('id',$this->session->userdata('pemain'))->get($this->_table)->row();

		$config['upload_path']          = 'img/';
		$config['allowed_types']        = 'jpg|jpeg|png|svg';
		$config['file_name']            = $data['orang']->username;
		$config['overwrite']			= true;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('fotoProfil')) {
			$this->upload->data("file_name");
			$tipe = $this->upload->data('file_ext');

			$this->db->set('foto', ('img/' . ($data['orang']->username) . $tipe));
			$this->db->where('id',$this->session->userdata('pemain'));
			$this->db->update($this->_table);
			return $this->session->set_flashdata('berhasil', 'Perubahan foto profil Anda <b>telah berhasil</b> tersimpan!');
		}
		return $this->session->set_flashdata('gagal', 'Perubahan foto profil Anda <b>gagal!</b> Silakan ulangi kembali proses perubahan foto.');
	}

	public function hapus(){
		$this->db->delete($this->_table, array("id" => $this->session->userdata('pemain')));
	}
}
