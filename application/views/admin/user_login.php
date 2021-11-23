<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="bg-light">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
			<div class="card mt-5 lift">
				<div class="card-body px-4 pt-5 pb-0 text-center">
					<h1 class="h1 text-dark font-weight-bold">Selamat Datang di TicTacToe</h1>
					<p class="px-4 lead">Silakan masukkan nama pengguna beserta kata sandi untuk melanjutkan ke permainan.</p>
					<?php if ($this->session->flashdata('salah')): ?>
						<p class="mx-4 alert alert-danger text-center" role="alert">
							<?php echo $this->session->flashdata('salah'); ?>
						</p>
					<?php endif; ?>
					<?php if ($this->session->flashdata('berhasil')): ?>
						<p class="mx-4 alert alert-success text-center" role="alert">
							<?php echo $this->session->flashdata('berhasil'); ?>
						</p>
					<?php endif; ?>
					<?php if ($this->session->flashdata('sukses')): ?>
					<p class="mx-4 alert alert-success text-center" role="alert">
						<?php echo $this->session->flashdata('sukses'); ?>
					</p>
					<?php header("refresh:3, url=".base_url('admin/overview'));endif; ?>
				</div>
				<div class="card-body px-5 py-3">
					<form action="<?= site_url('admin/login') ?>" method="post">
						<div class="form-group">
							<label class="text-gray-600 font-weight-bold" for="namaPengguna">Nama Pengguna</label>
							<input class="form-control form-control-solid" type="text" name="namaPengguna" required
								   placeholder="Masukkan nama pengguna anda">
						</div>
						<div class="form-group">
							<label class="text-gray-600 font-weight-bold" for="sandiPengguna">Kata Sandi</label>
							<input class="form-control form-control-solid" type="password" name="sandiPengguna" required
								   placeholder="Masukkan kata sandi anda">
						</div>
						<div class="form-group d-flex align-items-center justify-content-between mb-0">
							<input class="btn btn-primary btn-block" type="submit" name="masuk" value="Masuk">
						</div>
					</form>
				</div>
				<hr class="my-0">
				<div class="card-body bg-secondary-soft px-5 py-4">
					<div class="text-center">
						Belum memiliki akun?
						<a class="btn btn-secondary btn-sm text-decoration-none"
						   href="<?php echo base_url('admin/daftar') ?>">Buat Akun Baru
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
</div>
<?php $this->load->view("admin/_partials/modal.php") ?>
</body>
</html>
