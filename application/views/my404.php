<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo SITE_NAME .": ". "Ups..." ?></title>

	<link href="<?php echo base_url('css/sb-admin-pro.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
</head>
<body class="bg-light">
<div id="wrapper">
	<div id="content-wrapper">
		<div class="container-fluid">
			<div class="text-center mt-5">
				<p class="mt-5 mb-n4 font-weight-bolder text-indigo" style="font-size:150px">404</p>
				<p class="h1 text-red mb-5 font-weight-bolder">Halaman Tidak Ditemukan</p>
				<p class="text-gray-700 mb-2">&#128577 Sepertinya Anda tersesat &#128577</p>
				<a class="mb-5 font-weight-bold" href="<?php echo base_url('admin/overview') ?>">&larr; Kembali ke Beranda</a>
			</div>
		</div>
		<?php $this->load->view("admin/_partials/footer.php") ?>
	</div>
</div>
<?php $this->load->view("admin/_partials/js.php") ?>
</body>
</html>
