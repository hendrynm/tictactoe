<!-- MULAI Topbar -->
<nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">
	<a class="navbar-brand text-purple" href="<?php echo base_url('admin/overview') ?>"
	   style="font-size:4vh">TicTacToe</a>
	<button class="navbar-nav btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle"><i
				class="fa fa-bars"></i></button>
	<ul class="navbar-nav align-items-center ml-auto">
		<li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
			<a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage"
			   href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img class="img-fluid" src="<?php echo base_url($info->foto)?>">
			</a>

			<div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
				<h6 class="dropdown-header d-flex align-items-center">
					<img class="dropdown-user-img" src="<?php echo base_url($info->foto)?>" />
					<div class="dropdown-user-details">
						<div class="dropdown-user-details-name"><?php echo $info->nama?></div>
						<div class="dropdown-user-details-email"><?php echo $info->username ?></div>
					</div>
				</h6>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="<?php echo base_url('admin/profil') ?>">
					<div class="dropdown-item-icon"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i></div>
					Profil
				</a>
				<a class="dropdown-item" href="#!" data-toggle="modal" data-target="#logoutModal">
					<div class="dropdown-item-icon"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i></div>
					Keluar
				</a>
			</div>
		</li>
	</ul>
</nav>
<!-- SELESAI Topbar -->
