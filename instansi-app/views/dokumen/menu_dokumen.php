<div class="col-md-3">
	<div class="card-header">
		<h3 class="card-title">Jenis Produk Hukum</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="card-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<?php for ($i = 1; $i < count($submenu); $i++) : ?>
				<li class="<?php ($_SESSION['submenu'] == $submenu[$i]['id']) and print('active') ?>"><a href="<?= site_url('dokumen_sekretariat/peraturan_desa/' . $submenu[$i]['id']) ?>"><?= $submenu[$i]['nama'] ?></a></li>
			<?php endfor; ?>
		</ul>
	</div>
</div>
