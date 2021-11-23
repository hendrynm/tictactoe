<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gim_model extends CI_Model {

	private $_table = "sesi";

	public function tabel($id){
		return $this->db->where('id_sesi',$id)->get($this->_table)->row();
	}

	public function tambah($id){
		$post = $this->input->post();
		$input = $post["pilihKotak"];

		if($input != ''){
			$data['giliran'] = $this->db->where('id_sesi',$id)->get($this->_table)->row();
			$cekGiliran = ($data['giliran']->giliran) == ($data['giliran']->pemain1);

			switch ($input){
				case('kotak1'):
					if($cekGiliran) {
						$this->db->set('box1',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box1',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak2'):
					if($cekGiliran) {
						$this->db->set('box2',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box2',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak3'):
					if($cekGiliran) {
						$this->db->set('box3',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box3',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak4'):
					if($cekGiliran) {
						$this->db->set('box4',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box4',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak5'):
					if($cekGiliran) {
						$this->db->set('box5',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box5',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak6'):
					if($cekGiliran) {
						$this->db->set('box6',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box6',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak7'):
					if($cekGiliran) {
						$this->db->set('box7',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box7',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak8'):
					if($cekGiliran) {
						$this->db->set('box8',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box8',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				case('kotak9'):
					if($cekGiliran) {
						$this->db->set('box9',1);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					} else{
						$this->db->set('box9',2);
						$this->db->where('id_sesi',$id);
						$this->db->update($this->_table);
					}
					break;
				default:
					break;
			}
			$this->db->set('hitung','hitung+1',FALSE);
			$this->db->where('id_sesi',$id);
			return $this->db->update($this->_table);
		} else{
			return false;
		}
	}

	public function ubahGiliran($id) {
		$post = $this->input->post();
		$input = $post["pilihKotak"];

		if($input != '') {
			$data['giliran'] = $this->db->where('id_sesi',$id)->get($this->_table)->row();
			$cekGiliran = ($data['giliran']->giliran) == ($data['giliran']->pemain1);

			if($cekGiliran) {
				$this->db->set('giliran',$data['giliran']->pemain2);
				$this->db->where('id_sesi',$id);
				return $this->db->update($this->_table);
			} else{
				$this->db->set('giliran',$data['giliran']->pemain1);
				$this->db->where('id_sesi',$id);
				return $this->db->update($this->_table);
			}
		} else{
			return false;
		}
	}

	public function sisaKotak($id){
		$data['kosong'] = $this->db->where('id_sesi',$id)->get($this->_table)->row();
		$box1 = $data['kosong']->box1;
		$box2 = $data['kosong']->box2;
		$box3 = $data['kosong']->box3;
		$box4 = $data['kosong']->box4;
		$box5 = $data['kosong']->box5;
		$box6 = $data['kosong']->box6;
		$box7 = $data['kosong']->box7;
		$box8 = $data['kosong']->box8;
		$box9 = $data['kosong']->box9;

		// cek kosong
		$total=0;
		($box1==0) ? $total += 1 : false;
		($box2==0) ? $total += 1 : false;
		($box3==0) ? $total += 1 : false;
		($box4==0) ? $total += 1 : false;
		($box5==0) ? $total += 1 : false;
		($box6==0) ? $total += 1 : false;
		($box7==0) ? $total += 1 : false;
		($box8==0) ? $total += 1 : false;
		($box9==0) ? $total += 1 : false;
		return $total;
	}

	public function pemenang($id){
		$menang=0;
		$data['menang'] = $this->db->where('id_sesi',$id)->get($this->_table)->row();
		$box1 = $data['menang']->box1;
		$box2 = $data['menang']->box2;
		$box3 = $data['menang']->box3;
		$box4 = $data['menang']->box4;
		$box5 = $data['menang']->box5;
		$box6 = $data['menang']->box6;
		$box7 = $data['menang']->box7;
		$box8 = $data['menang']->box8;
		$box9 = $data['menang']->box9;

		// komposisi mendatar
		if(
			(($box1==1)&&($box2==1)&&($box3==1)) ||
			(($box4==1)&&($box5==1)&&($box6==1)) ||
			(($box7==1)&&($box8==1)&&($box9==1))
		){
			$this->db->set('menang',$data['menang']->pemain1);
			$this->db->set('kalah',$data['menang']->pemain2);
			$this->db->where('id_sesi',$id);
			return $this->db->update($this->_table);
		}
		else if(
			(($box1==2)&&($box2==2)&&($box3==2)) ||
			(($box4==2)&&($box5==2)&&($box6==2)) ||
			(($box7==2)&&($box8==2)&&($box9==2))
		){
			$this->db->set('menang',$data['menang']->pemain2);
			$this->db->set('kalah',$data['menang']->pemain1);
			$this->db->where('id_sesi',$id);
			return $this->db->update($this->_table);
		}
		// komposisi menurun
		else if(
			(($box1==1)&&($box4==1)&&($box7==1)) ||
			(($box2==1)&&($box5==1)&&($box8==1)) ||
			(($box3==1)&&($box6==1)&&($box9==1))
		){
			$this->db->set('menang',$data['menang']->pemain1);
			$this->db->set('kalah',$data['menang']->pemain2);
			$this->db->where('id_sesi',$id);
			return $this->db->update($this->_table);
		}
		else if(
			(($box1==2)&&($box4==2)&&($box7==2)) ||
			(($box2==2)&&($box5==2)&&($box8==2)) ||
			(($box3==2)&&($box6==2)&&($box9==2))
		){
			$this->db->set('menang',$data['menang']->pemain2);
			$this->db->set('kalah',$data['menang']->pemain1);
			$this->db->where('id_sesi',$id);
			return $this->db->update($this->_table);
		}
		// komposisi diagonal
		else if(
			(($box1==1)&&($box5==1)&&($box9==1)) ||
			(($box3==1)&&($box5==1)&&($box7==1))
		){
			$this->db->set('menang',$data['menang']->pemain1);
			$this->db->set('kalah',$data['menang']->pemain2);
			$this->db->where('id_sesi',$id);
			return $this->db->update($this->_table);
		}
		else if(
			(($box1==2)&&($box5==2)&&($box9==2)) ||
			(($box3==2)&&($box5==2)&&($box7==2))
		){
			$this->db->set('menang',$data['menang']->pemain2);
			$this->db->set('kalah',$data['menang']->pemain1);
			$this->db->where('id_sesi',$id);
			return $this->db->update($this->_table);
		}
		return false;
	}

	public function simpan($id){
		$data['menang'] = $this->db->where('id_sesi',$id)->get($this->_table)->row();
		$pemain1 = $data['menang']->pemain1;
		$pemain2 = $data['menang']->pemain2;
		$id_menang = $data['menang']->menang;
		$id_kalah = $data['menang']->kalah;

		if($id_menang != 0){
			$this->db->set('menang','menang+1',FALSE);
			$this->db->where('id',$id_menang);
			$this->db->update('pengguna');

			$this->db->set('kalah','kalah+1',FALSE);
			$this->db->where('id',$id_kalah);
			$this->db->update('pengguna');
		} else{
			$this->db->set('seri','seri+1',FALSE);
			$this->db->where('id',$pemain1);
			$this->db->update('pengguna');

			$this->db->set('seri','seri+1',FALSE);
			$this->db->where('id',$pemain2);
			$this->db->update('pengguna');
		}
	}

	public function reset($id){
		$data['menang'] = $this->db->where('id_sesi',$id)->get($this->_table)->row();
		$pemain = array(($data['menang']->pemain1),($data['menang']->pemain2));

		$this->db->set('box1', 0);
		$this->db->set('box2', 0);
		$this->db->set('box3', 0);
		$this->db->set('box4', 0);
		$this->db->set('box5', 0);
		$this->db->set('box6', 0);
		$this->db->set('box7', 0);
		$this->db->set('box8', 0);
		$this->db->set('box9', 0);
		$this->db->set('giliran',$pemain[array_rand($pemain)]);
		$this->db->set('hitung',0);
		$this->db->set('menang',0);
		$this->db->set('kalah',0);
		$this->db->where('id_sesi',$id);
		return $this->db->update($this->_table);
	}

	public function hapus($id){
		$this->db->where('id_sesi',$id)->delete($this->_table);
	}

	public function cek($id){
		$jumlah = $this->db->where('id_sesi',$id)->get($this->_table)->num_rows();
		return ($jumlah > 0) ? true : false;
	}
}
