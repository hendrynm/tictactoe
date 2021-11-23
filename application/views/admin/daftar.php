<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="bg-light">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-9">
			<div class="card my-5 lift">
				<div class="card-body px-4 pt-5 pb-0 text-center">
					<h1 class="h1 text-dark font-weight-bolder"><b>Pendaftaran Akun TicTacToe</b></h1>
					<p class="lead">Silakan mengisi data isian yang tersedia di bawah ini.</p>
					<?php if ($this->session->flashdata('gagal')): ?>
						<p class="mx-4 alert alert-danger text-center" role="alert">
							<?php echo $this->session->flashdata('gagal'); ?>
						</p>
					<?php endif; ?>
				</div>
				<div class="card-body px-5 py-3">
					<form action="<?php echo site_url('admin/daftar/tambah') ?>" method="post">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label class="text-gray-600 font-weight-bold" for="nama">Nama Lengkap</label>
								<input class="form-control form-control-solid" type="text" name="nama" disabled
									   placeholder="Masukkan nama lengkap anda">
							</div>
							<div class="form-group col-md-6">
								<label class="text-gray-600 font-weight-bold" for="namaPengguna">Nama Pengguna</label>
								<input class="form-control form-control-solid" type="text" name="namaPengguna" required
									   placeholder="Tidak boleh ada spasi">
							</div>
						</div>
						<div class="form-row mb-n3">
							<div class="form-group col-12">
								<label class="text-gray-600 font-weight-bold" for="foto">Pilih Foto</label>
							</div>
						</div>
						<div class="form-inline">
							<div class="form-group col-md-3 custom-control custom-radio">
								<input class="custom-control-input" id="customRadio1" type="radio" name="foto"
									   value="img/undraw_profile.svg" required>
								<label class="custom-control-label" for="customRadio1">
									<img style="width: 75%" class="img-account-profile"
										 src="<?php echo base_url('img/undraw_profile.svg') ?>">
								</label>
							</div>
							<div class="form-group col-md-3 custom-control custom-radio">
								<input class="custom-control-input" id="customRadio2" type="radio" name="foto"
									   value="img/undraw_profile_1.svg">
								<label class="custom-control-label" for="customRadio2">
									<img style="width: 75%" class="img-account-profile"
										 src="<?php echo base_url('img/undraw_profile_1.svg') ?>">
								</label>
							</div>
							<div class="form-group col-md-3 custom-control custom-radio">
								<input class="custom-control-input" id="customRadio3" type="radio" name="foto"
									   value="img/undraw_profile_2.svg">
								<label class="custom-control-label" for="customRadio3">
									<img style="width: 75%" class="img-account-profile"
										 src="<?php echo base_url('img/undraw_profile_2.svg') ?>">
								</label>
							</div>
							<div class="form-group col-md-3 custom-control custom-radio">
								<input class="custom-control-input" id="customRadio4" type="radio" name="foto"
									   value="img/undraw_profile_3.svg">
								<label class="custom-control-label" for="customRadio4">
									<img style="width: 75%" class="img-account-profile"
										 src="<?php echo base_url('img/undraw_profile_3.svg') ?>">
								</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label class="text-gray-600 font-weight-bold" for="sandiPengguna">Kata Sandi</label>
								<input class="form-control form-control-solid" type="password" name="sandiPengguna" required
									   placeholder="Masukkan kata sandi anda">
							</div>
							<div class="form-group col-md-6">
								<label class="text-gray-600 font-weight-bold" for="ulangiSandi">Ulangi Kata Sandi</label>
								<input class="form-control form-control-solid" type="password" name="ulangiSandi" required
									   placeholder="Masukkan ulang kata sandi anda">
							</div>
						</div>
						<div class="form-group d-flex align-items-center justify-content-between mt-3">
							<div class="custom-control custom-control-solid custom-checkbox">
								<input class="custom-control-input small" id="customCheck1" type="checkbox" required>
								<label class="custom-control-label mr-3" for="customCheck1">
									Saya setuju dengan
									<a class="text-decoration-none" href="#!" data-toggle="modal"
									   data-target="#syaratModal">
										Syarat dan Ketentuan,
									</a>
									<a class="text-decoration-none" href="#!" data-toggle="modal"
									   data-target="#privasiModal">
										Kebijakan Privasi,
									</a>dan
									<a class="text-decoration-none" href="#!" data-toggle="modal"
									   data-target="#penafianModal">
										Penafian
									</a>
								</label>
							</div>
							<button class="btn btn-primary" type="submit" name="daftar">Daftarkan Akun</button>
						</div>
					</form>
				</div>
				<hr class="my-0">
				<div class="card-body bg-secondary-soft px-5 py-4">
					<div class="text-center">
						Sudah memiliki akun?
						<a class="btn btn-secondary btn-sm text-decoration-none"
						   href="<?php echo base_url('admin/login') ?>">Masuk ke Permainan
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-5 mx-auto mt-0">
			<?php $this->load->view("admin/_partials/footer.php") ?>
		</div>
	</div>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</div>
</body>
</html>
