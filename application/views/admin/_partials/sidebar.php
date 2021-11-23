<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sidenav shadow-right sidenav-light" id="sidebar">
			<div class="sidenav-menu">
				<div class="nav accordion" id="accordionSidenav">
					<div class="sidenav-menu-heading text-primary text-capitalize" style="font-size:1rem">Pemain
						Aktif </div>
					<?php foreach ($pemain as $pemain): ?>
					<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
					   data-target="#<?php echo $pemain->username?>" aria-expanded="false" aria-controls="collapseDashboards">
						<?php echo $pemain->nama?>
						<div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="<?php echo $pemain->username?>" data-parent="#accordionSidenav">
						<nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
							<form action="<?php echo base_url('admin/overview/ajak').'/'.$pemain->id?>" method="post">
								<input type="hidden" name="nama_penerima" value="<?php echo $pemain->nama ?>">
								<button class="btn btn-sm btn-primary lift" type="submit" style="width: 190px">
									Ajak Main</button>
							</form>
						</nav>
					</div>
					<?php endforeach; ?>

					<div class="sidenav-menu-heading text-primary text-capitalize" style="font-size:1rem">Permintaan
						Terkirim</div>
					<?php foreach ($kirim as $kirim): ?>
						<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
						   data-target="#nama<?php echo $kirim->id_penerima ?>" aria-expanded="false" aria-controls="collapseDashboards">
							<?php echo $kirim->nama_penerima ?>
						</a>
					<?php endforeach; ?>

					<div class="sidenav-menu-heading text-primary text-capitalize" style="font-size:1rem">Permintaan
						Diterima</div>
					<?php foreach ($ajak as $ajak): ?>
					<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse"
					   data-target="#nama<?php echo $ajak->id_pengirim ?>" aria-expanded="false" aria-controls="collapseDashboards">
						<?php echo $ajak->nama_pengirim ?>
						<div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
					</a>
					<div class="collapse" id="nama<?php echo $ajak->id_pengirim ?>" data-parent="#accordionSidenav">
						<nav class="sidenav-menu-nested nav accordion form-row" id="accordionSidenavPages">
							<div class="form-inline">
								<a class="btn btn-sm btn-danger mr-2 lift" style="width: 90px"
								   href="<?php echo base_url('admin/overview/tolak').'/'.base64_encode($ajak->id_sesi) ?>">
									Tolak
								</a>
								<a class="btn btn-sm btn-primary lift" style="width: 90px"
								   href="<?php echo base_url('admin/overview/terima').'/'.base64_encode($ajak->id_sesi) ?>">
									Terima
								</a>
							</div>
						</nav>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="sidenav-footer">
				<div class="sidenav-footer-content">
					<div class="sidenav-footer-subtitle">Anda masuk sebagai:</div>
					<div class="sidenav-footer-title text-primary"><?php echo $info->nama ?></div>
				</div>
			</div>
		</nav>
	</div>

