<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview_model extends CI_Model
{
	private $_table = 'pengguna';
	private $_table2 = 'permintaan';
	private $_table3 = 'sesi';

	public function tabel(){
		$this->db->where('id',$this->session->userdata('pemain'));
		return $this->db->get($this->_table)->row();
	}

	public function kirim(){
		$this->db->where('id_pengirim',$this->session->userdata('pemain'));
		return $this->db->get($this->_table2)->result();
	}

	public function sesi(){
		$this->db->or_where('pemain1',$this->session->userdata('pemain'))->or_where('pemain2',$this->session->userdata('pemain'));
		return ($this->db->get($this->_table3)->num_rows() > 0) ? $this->db->get($this->_table3)->row_array() : false;
	}
	
	public function pemain(){
		$this->db->select('id,nama,username')->where('aktif',1)->where_not_in('id',$this->session->userdata('pemain'));
		return $this->db->get($this->_table)->result();
	}

	public function ajak(){
		$this->db->where('id_penerima',$this->session->userdata('pemain'));
		return $this->db->get($this->_table2)->result();
	}

	public function cek($id){
		$cek1 = $this->db->where('id_penerima',$id)->where('id_pengirim',$this->session->userdata('pemain'))->get
		($this->_table2)
			->num_rows();
		$cek2 = $this->db->where('id_pengirim',$id)->where('id_penerima',$this->session->userdata('pemain'))->get
		($this->_table2)->num_rows();
		if($cek1 == 0 && $cek2 == 0){
			return true;
		} else if($cek1 > 0){
			$this->session->set_flashdata('gagal', 'Anda telah mengirim permintaan bermain ke pemain ini. <b>Tunggu balasan pemain lain dahulu!</b>');
			return false;
		} else{
			$this->session->set_flashdata('gagal', 'Pemain ini telah mengirim permintaan bermain kepada Anda. <b>Balas pesan mereka dahulu!</b>');
			return false;
		}
	}

	public function kirim_ajakan($id){
		$data['pemain'] = $this->db->where('id',$this->session->userdata('pemain'))->get($this->_table)->row();

		$post = $this->input->post();
		$this->id_pengirim = $data['pemain']->id;
		$this->nama_pengirim = $data['pemain']->nama;
		$this->id_penerima = $id;
		$this->nama_penerima = $post['nama_penerima'];
		$this->db->replace($this->_table2,$this);

		$this->session->set_flashdata('berhasil', 'Permintaan untuk bermain <b>berhasil dikirimkan!</b> Mohon menunggu beberapa saat.');
	}

	public function cek_ajakan($id){
		$data['aktif'] = $this->db->where('id_sesi',$id)->get($this->_table2)->row();
		$cekPengirim = $this->db->get_where($this->_table3,array('pemain1'=>$data['aktif']->id_pengirim))->num_rows() > 0;
		$cekPenerima = $this->db->get_where($this->_table3,array('pemain2'=>$data['aktif']->id_penerima))->num_rows() > 0;

		if($cekPenerima || $cekPengirim){
			$this->session->set_flashdata('gagal', 'Anda sedang memiliki sesi aktif saat ini! <b>Selesaikan dulu permainan anda!</b>');
			return false;
		}
		else{
			return true;
		}
	}

	public function terima_ajakan($id){
		$data['aktif'] = $this->db->where('id_sesi',$id)->get($this->_table2)->row();
		$pemain = array(($data['aktif']->id_pengirim),($data['aktif']->id_penerima));

		$this->id_sesi = $data['aktif']->id_sesi;
		$this->pemain1 = $data['aktif']->id_pengirim;
		$this->pemain2 = $data['aktif']->id_penerima;
		$this->box1 = 0;
		$this->box2 = 0;
		$this->box3 = 0;
		$this->box4 = 0;
		$this->box5 = 0;
		$this->box6 = 0;
		$this->box7 = 0;
		$this->box8 = 0;
		$this->box9 = 0;
		$this->giliran = $pemain[array_rand($pemain)];
		$this->hitung = 0;
		$this->menang = 0;
		$this->kalah = 0;
		$this->db->insert($this->_table3,$this);

		$this->db->where('id_sesi',$id)->delete($this->_table2);
	}

	public function tolak_ajakan($id){
		$this->db->where('id_sesi',$id)->delete($this->_table2);
		$this->session->set_flashdata('berhasil', 'Permintaan untuk bermain <b>berhasil ditolak!</b>');
	}

	public function hapus_ajakan(){
		$this->db->where('id_penerima',$this->session->userdata('pemain'))->delete($this->_table2);
	}
}
