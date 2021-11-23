<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="nav-fixed" id="page-top">
<div id="wrapper">
	<div id="content-wrapper mb-10">
		<?php $this->load->view("admin/_partials/topbar.php") ?>
		<div class="container mt-5">
			<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-2 pt-2">
				<div class="page-header-content ml-5 mr-3">
					<div class="row align-items-center justify-content-between">
						<div class="col-auto">
							<h1 class="page-header-title">
								<div class="page-header-icon"><i class="fas fa-cogs mr-3"></i></div>
								Profil Pengguna
							</h1>
							<div class="page-header-subtitle mt-2 text-white-75">
								Halaman ini digunakan untuk mengatur data pengguna yang telah tersimpan pada basis data
							</div>
						</div>
					</div>
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

			<div class="row mt-4">
				<div class="col-xl-3">
					<div class="card lift">
						<div class="card-header bg-info text-white">Ubah Foto Profil</div>

						<div class="card-body bg-info-soft text-center">
							<div style="width: 200px; height: 200px; background-size:cover; background-position:center;margin: 0 auto;">
								<img src="<?php echo base_url($info->foto) ?>"
								style="width:200px;height:200px;object-fit:cover;border-radius:50%;">
							</div>
							<div class="small text-secondary mt-4 mb-4">Format didukung: JPEG, JPG, atau PNG<br>
								Ukuran file maksimal: 1 MB</div>
							<form action="<?php echo base_url('admin/profil/ubahFoto') ?>"
								  enctype="multipart/form-data" method="post">
								<input class="form-control-file" type="file" name="fotoProfil" required>
								<button class="btn btn-info mt-3 lift" type="submit">Unggah Foto Profil</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xl-6 mt-xl-0 mt-3">
					<div class="card mb-4 lift">
						<div class="card card-header bg-primary text-white">Ubah Detail Akun</div>
						<div class="card-body bg-primary-soft">
							<form action="<?php echo base_url('admin/profil/ubahData') ?>" method="post">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label class="mb-1 font-weight-bold" for="nama">Nama Lengkap</label>
										<input class="form-control" name="nama" type="text"
											   placeholder="Masukkan nama lengkap anda"
											   value="<?php echo $info->nama ?>" spellcheck="false" data-ms-editor="true" required>
									</div>
									<div class="form-group col-md-6">
										<label class="mb-1 font-weight-bold" for="username">Nama Pengguna
											(<i>username</i>)</label>
										<input class="form-control" name="username" type="text"
											   placeholder="Masukkan nama pengguna anda"
											   value="<?php echo $info->username ?>" spellcheck="false"
											   data-ms-editor="true" required>
									</div>
									<div class="form-group col-md-6">
										<label class="mb-1 font-weight-bold" for="password">Kata Sandi (<i>password</i>)</label>
										<input class="form-control" name="password" type="password" placeholder="Masukkan kata sandi anda"
											   value="" spellcheck="false" data-ms-editor="true" required>
									</div>
									<div class="form-group col-md-6">
										<label class="mb-1 font-weight-bold" for="ulangPassword">
											Ulangi Kata Sandi (<i>password</i>)</label>
										<input class="form-control" name="ulangPassword" type="password"
											   placeholder="Ulangi kata sandi anda"
											   value="" spellcheck="false" data-ms-editor="true" required>
									</div>
								</div>
								<button class="btn btn-primary lift" type="submit">Simpan Perubahan Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card mb-4 lift">
						<div class="card-header bg-danger text-white">Hapus Akun</div>
						<div class="card-body bg-danger-soft">
							<p>Tindakan menghapus akun ini tidak dapat dibatalkan!
								Klik tombol berikut jika yakin untuk menghapus akun.</p>
							<a href="#!" class="btn-small text-danger text-decoration-none"
							   data-toggle="modal" data-target="#deleteModal">
								<button class="btn btn-danger text-white text-center lift" type="submit">
									Saya mengerti, Hapus akun saya
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>
</div>
<script>
	$(document).ready(function(){
		$("#sidebarToggle").remove();
	});
</script>
</body>
</html>
