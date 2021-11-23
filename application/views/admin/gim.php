<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper">
		<?php $this->load->view("admin/_partials/topbar.php") ?>
		<div class="container mt-10">
			<div class="row">
				<div class="card col-12 col-lg-4 mr-auto px-3 pt-3">
					<div class="card-header bg-gray-300 text-dark font-weight-bolder text-center h3">
						Papan Permainan</div>
					<form action="<?php echo base_url('admin/gim/tambah/').base64_encode($tabel->id_sesi) ?>" method="post">
					<table class="card-body table text-center mt-3" style="width:100%; font-size:40pt">
						<tbody class="font-weight-bold">
						<tr>
							<td style="border-right: #858796 solid 5px; border-top: solid 0px;">
								<input class="custom-control-input" id="kotak1" type="submit" name="pilihKotak"
									   value="kotak1" required <?php echo
								(($tabel->box1 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box1)==0 ? 'text-gray-300' : ''?>" for="kotak1">
									<?php echo ($tabel->box1)==0 ? '1' : strtr($tabel->box1,array(1=>'X',2=>'O'))?>
								</label>
							</td>
							<td style="border-left: #858796 solid 5px; border-right: #858796 solid 5px; border-top: solid 0px;">
								<input class="custom-control-input" id="kotak2" type="submit" name="pilihKotak"
									   value="kotak2" required <?php echo
								(($tabel->box2 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box2)==0 ? 'text-gray-300' : ''?>" for="kotak2">
									<?php echo ($tabel->box2)==0 ? '2' : strtr($tabel->box2,array(1=>'X',2=>'O'))?>
								</label>
							</td>
							<td style="border-left: #858796 solid 5px; border-top: solid 0px;">
								<input class="custom-control-input" id="kotak3" type="submit" name="pilihKotak"
									   value="kotak3" required <?php echo
								(($tabel->box3 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box3)==0 ? 'text-gray-300' : ''?>" for="kotak3">
									<?php echo ($tabel->box3)==0 ? '3' : strtr($tabel->box3,array(1=>'X',2=>'O'))?>
								</label>
							</td>
						</tr>
						<tr>
							<td style="border-right: #858796 solid 5px; border-top: #858796 solid 5px;">
								<input class="custom-control-input" id="kotak4" type="submit" name="pilihKotak"
									   value="kotak4" required <?php echo
								(($tabel->box4 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box4)==0 ? 'text-gray-300' : ''?>" for="kotak4">
									<?php echo ($tabel->box4)==0 ? '4' : strtr($tabel->box4,array(1=>'X',2=>'O'))?>
								</label>
							</td>
							<td style="border-left: #858796 solid 5px; border-right: #858796 solid 5px; border-top: #858796 solid 5px;">
								<input class="custom-control-input" id="kotak5" type="submit" name="pilihKotak"
									   value="kotak5" required <?php echo
								(($tabel->box5 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box5)==0 ? 'text-gray-300' : ''?>" for="kotak5">
									<?php echo ($tabel->box5)==0 ? '5' : strtr($tabel->box5,array(1=>'X',2=>'O'))?>
								</label>
							</td>
							<td style="border-left: #858796 solid 5px; border-top: #858796 solid 5px;">
								<input class="custom-control-input" id="kotak6" type="submit" name="pilihKotak"
									   value="kotak6" required <?php echo
								(($tabel->box6 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box6)==0 ? 'text-gray-300' : ''?>" for="kotak6">
									<?php echo ($tabel->box6)==0 ? '6' : strtr($tabel->box6,array(1=>'X',2=>'O'))?>
								</label>
							</td>
						</tr>
						<tr>
							<td style="border-right: #858796 solid 5px; border-top: #858796 solid 5px;">
								<input class="custom-control-input" id="kotak7" type="submit" name="pilihKotak"
									   value="kotak7" required <?php echo
								(($tabel->box7 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box7)==0 ? 'text-gray-300' : ''?>" for="kotak7">
									<?php echo ($tabel->box7)==0 ? '7' : strtr($tabel->box7,array(1=>'X',2=>'O'))?>
								</label>
							</td>
							<td	style="border-left: #858796 solid 5px; border-right: #858796 solid 5px; border-top: #858796 solid 5px;">
								<input class="custom-control-input" id="kotak8" type="submit" name="pilihKotak"
									   value="kotak8" required <?php echo
								(($tabel->box8 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box8)==0 ? 'text-gray-300' : ''?>" for="kotak8">
									<?php echo ($tabel->box8)==0 ? '8' : strtr($tabel->box8,array(1=>'X',2=>'O'))?>
								</label>
							</td>
							<td style="border-left: #858796 solid 5px; border-top: #858796 solid 5px;">
								<input class="custom-control-input" id="kotak9" type="submit" name="pilihKotak"
									   value="kotak9" required <?php echo
								(($tabel->box9 != 0) || ($tabel->giliran != $this->session->userdata('pemain')) ||
								($tabel->menang != 0)) ? 'disabled' : ''?>>
								<label class="custom-control-label <?php echo ($tabel->box9)==0 ? 'text-gray-300' : ''?>" for="kotak9">
									<?php echo ($tabel->box9)==0 ? '9' : strtr($tabel->box9,array(1=>'X',2=>'O'))?>
								</label>
							</td>
						</tr>
						</tbody>
					</table>
					</form>
				</div>

				<div class="card col-12 col-lg-7 ml-auto px-3 pt-3">
					<div class="card-header bg-gray-300 text-dark font-weight-bolder text-center h3">
						Info Permainan
					</div>
					<div class="card-body font-weight-bold mt-3 mb-3 h5 text-center
					<?php
					$hitung = $tabel->hitung;
					$menang = $tabel->menang;
					$id = $this->session->userdata('pemain');

					echo
					(($hitung == 9) && ($menang == 0) ? 'alert-warning' :
					((($menang == 0) && ($hitung <= 9) ? 'alert-primary' :
					(((($menang != $id) && ($hitung <= 9) ? 'alert-danger' :
					((((($menang == $id) && ($hitung <= 9) ? 'alert-success' : ''))))))))));
					?> menang">
					</div>
					<div class="card-body form-inline m-auto ulang">
						<a class="text-decoration-none"
						   href="<?php echo base_url('admin/gim/reset/').base64_encode($tabel->id_sesi) ?>">
							<button type="submit" class="btn btn-primary mr-3 lift" style="width:100px">
								Main lagi
							</button>
						</a>
						<a class="text-decoration-none"
						   href="<?php echo base_url('admin/gim/keluar/').base64_encode($tabel->id_sesi) ?>">
							<button type="submit" class="btn btn-danger ml-3 lift" style="width:100px">
								Akhiri
							</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
</div>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>

<!-- Menghilangkan menu saat bukan gilirannya -->
<script>
	$(document).ready(function(){
		$("#sidebarToggle").remove();
	});

	<?php if((($tabel->hitung) == 9) && (($tabel->menang) == 0)): ?>
	$(document).ready(function(){
		$(".menang").append("<h1><b>Yah, hasilnya Seri :)</b></h1>");
	});
	<?php header("refresh:10, url=". strval(base_url('admin/gim/gim/').base64_encode($tabel->id_sesi)) );?>
	<?php endif ;?>

	<?php if((($tabel->hitung) <= 9) && (($tabel->menang) != 0)): ?>
	$(document).ready(function(){
		$(".menang").append(
		"<?php echo($this->session->userdata('pemain') == $tabel->menang) ?
			'<h1><b>Selamat</b></h1> <br>'.($info->nama.' <b>menang</b>') :
				'<h1><b>Yah</b></h1><br>'.($info->nama.' <b>kalah</b>');?> ");
	});
	<?php header("refresh:10, url=". strval(base_url('admin/gim/gim/').base64_encode($tabel->id_sesi)) );?>
	<?php endif ;?>

	<?php if(($this->session->userdata('pemain')) != ($tabel->giliran) &&
	(($tabel->menang) == 0) && (($tabel->hitung) < 9)): ?>
	$(document).ready(function(){
		$(".menang").append("<?php echo($tabel->giliran) == $this->session->userdata('pemain') ?
				'Giliran Lawanmu' : 'Giliran Lawanmu' ?>");
		$(".ulang").remove();
	});
	<?php header("refresh:5, url=". strval(base_url('admin/gim/gim/').base64_encode($tabel->id_sesi)) );?>
	<?php endif ;?>

	<?php if(($this->session->userdata('pemain')) == ($tabel->giliran) &&
	(($tabel->menang) == 0) && (($tabel->hitung) < 9)): ?>
	$(document).ready(function(){
		$(".menang").append("<?php echo ((($this->session->userdata('pemain')) == ($tabel->giliran)) &&
				(($tabel->pemain1) == ($tabel->giliran))) ?
			'Kamu bermain sebagai <b>X</b>' : 'Kamu bermain sebagai <b>O</b>' ?>"+"<br>Pilihlah salah satu kotak yang masih tersedia");
		$(".ulang").remove();
	});
	<?php endif ;?>
</script>
</body>
</html>
