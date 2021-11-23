<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper">
		<?php $this->load->view("admin/_partials/topbar.php") ?>
		<?php $this->load->view("admin/_partials/sidebar.php") ?>
		<div id="layoutSidenav_content">
			<div class="container">
				<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-2 pt-2">
					<div class="page-header-content ml-5 mr-3">
						<div class="row align-items-center justify-content-between">
							<div class="col-auto">
								<h1 class="page-header-title">
									<?php echo 'Selamat Datang' ?>
								</h1>
								<h1 class="page-header-title mt-2">
									<?php echo '<b>' . $info->nama . '</b>' ?>
								</h1>
							</div>
						</div>
						<?php if($sesi['ketersediaan'] == 1): ?>
						<div class="mt-4 form-group align-content-end">
							<span class="font-weight-bold text-white">Halaman Game: </span>
							<a href="<?php echo base_url('admin/gim/gim/').base64_encode($sesi['id_sesi']); ?>"
							   class="btn btn-info btn-sm text-white font-weight-bold text-decoration-none">Tekan disini</a>
						</div>
						<?php endif; ?>
					</div>
				</header>

				<?php if ($this->session->flashdata('berhasil')): ?>
					<div class="mt-4">
						<div class="alert alert-success alert-dismissible text-center fade show" role="alert">
							<?php echo $this->session->flashdata('berhasil'); ?>
							<button class="close" type="button" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
					</div>
				<?php endif; ?>

				<?php if ($this->session->flashdata('gagal')): ?>
					<div class="mt-4">
						<div class="alert alert-danger alert-dismissible text-center fade show" role="alert">
							<?php echo $this->session->flashdata('gagal'); ?>
							<button class="close" type="button" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
					</div>
				<?php endif; ?>

				<div class="col-12">
					<p class="row h1 font-weight-bolder text-primary mt-3 mb-3">Statistik Pengguna</p>
				</div>

				<div class="row">
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-primary text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Bermain</div>
										<div class="text-lg font-weight-bold"><b>
											<?php echo (($info->menang) + ($info->kalah) + ($info->seri))." kali" ?></b>
										</div>
									</div>
									<i class="fas fa-gamepad fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Jumlah permainan yang kamu diselesaikan</p>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-success text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Menang</div>
										<div class="text-lg font-weight-bold"><b><?php echo $info->menang." kali" ?></b></div>
									</div>
									<i class="fas fa-angle-double-up fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Jumlah permainan yang kamu menangkan</p>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-danger text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Kalah</div>
										<div class="text-lg font-weight-bold"><b><?php echo $info->kalah." kali" ?></b></div>
									</div>
									<i class="fas fa-angle-double-down fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Jumlah permainan yang kalah oleh lawanmu</p>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-warning text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Seri</div>
										<div class="text-lg font-weight-bold"><b><?php echo $info->seri." kali" ?></b></div>
									</div>
									<i class="fas fa-equals fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Jumlah permainan yang seri dengan lawanmu</p>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-primary text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Rasio</div>
										<div class="text-lg font-weight-bold">
											<b><?php echo $info->menang . " : " . $info->kalah . " : " . $info->seri; ?></b>
										</div>
									</div>
									<i class="fas fa-divide fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Rasio menang : kalah : seri</p>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-success text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Rata<sup>2</sup> Menang</div>
										<div class="text-lg font-weight-bold">
											<b>
											<?php
											$pembagi = ($info->menang) + ($info->kalah) + ($info->seri);
											($pembagi!=0) ?	$hitung = (($info->menang) / $pembagi) * 100 : $hitung = 1;
											echo($hitung==1)? '0 %' :
													number_format($hitung,0,',','.')." %";
											?></b>
										</div>
									</div>
									<i class="fas fa-percentage fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Persentase menang dari total bermain</p>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-danger text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Rata<sup>2</sup> Kalah</div>
										<div class="text-lg font-weight-bold">
											<b>
											<?php
											$pembagi = ($info->menang) + ($info->kalah) + ($info->seri);
											($pembagi!=0) ?	$hitung = (($info->kalah) / $pembagi) * 100 : $hitung = 1;
											echo($hitung==1)? '0 %' :
													number_format($hitung,0,',','.')." %";
											?></b>
										</div>
									</div>
									<i class="fas fa-percentage fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Persentase kalah dari total bermain</p>
							</div>
						</div>
					</div>
					<div class="col-xxl-3 col-lg-6">
						<div class="card bg-warning text-white mb-4 lift">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-3">
										<div class="text-gray-100">Rata<sup>2</sup> Seri</div>
										<div class="text-lg font-weight-bold">
											<b>
											<?php
											$pembagi = ($info->menang) + ($info->kalah) + ($info->seri);
											($pembagi!=0) ?	$hitung = (($info->seri) / $pembagi) * 100 : $hitung = 1;
											echo($hitung==1)? '0 %' :
													number_format($hitung,0,',','.')." %";
											?></b>
										</div>
									</div>
									<i class="fas fa-percentage fa-2x text-white"></i>
								</div>
							</div>
							<div class="card-footer d-flex align-items-center justify-content-between">
								<p class="small text-white">Persentase seri dari total bermain</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</div>
<script>
	<?php if($sesi['ketersediaan'] == 1){
		header("refresh:1, url=".strval(base_url('admin/gim/gim/').(base64_encode($sesi['id_sesi']))));
	}
	?>

	<?php if($sesi['ketersediaan'] == 0) {
		header("refresh:10, url=". base_url('admin/overview'));
	}
	?>
</script>
</body>
</html>
