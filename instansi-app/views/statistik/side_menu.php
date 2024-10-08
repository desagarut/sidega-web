<?php  defined('BASEPATH') OR exit('No direct script access allowed');?>

<div id="penduduk" class="card-info <?= ($kategori == 'penduduk') ?: 'collapsed-box'; ?>">
	<div class="card-header">
		<h3 class="card-title">Statistik Klien</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa <?= ($kategori == 'penduduk') ? 'fa-minus' : 'fa-plus'; ?>"></i></button>
		</div>
	</div>
	<div class="card-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<?php foreach ($stat_penduduk as $id => $nama): ?>
				<li <?= jecho((string)$id, $lap, 'class="active"'); ?>><?= anchor("statistik/clear/$id", $nama); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<div id="keluarga" class="card-info <?= ($kategori == 'keluarga') ?: 'collapsed-box'; ?>">
	<div class="card-header">
		<h3 class="card-title">Statistik Keluarga</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa <?= ($kategori == 'keluarga') ? 'fa-minus' : 'fa-plus'; ?>"></i></button>
		</div>
	</div>
	<div class="card-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<?php foreach ($stat_keluarga as $id => $nama): ?>
				<li <?= jecho($id, $lap, 'class="active"'); ?>><?= anchor("statistik/clear/$id", $nama); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<div id="bantuan" class="card-info <?= ($kategori == 'bantuan') ?: 'collapsed-box'; ?>">
	<div class="card-header">
		<h3 class="card-title">Statistik Program Bantuan</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa <?= ($kategori == 'bantuan') ? 'fa-minus' : 'fa-plus'; ?>"></i></button>
		</div>
	</div>
	<div class="card-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<?php foreach ($stat_kategori_bantuan as $id => $nama): ?>
				<li <?= jecho($id, $lap, 'class="active"'); ?>><?= anchor("statistik/clear/$id", $nama); ?></li>
			<?php endforeach; ?>
			<?php foreach ($stat_bantuan as $bantuan): ?>
				<li <?= jecho($bantuan['lap'], $lap, 'class="active"'); ?>><?= anchor("statistik/clear/$bantuan[lap]", "$bantuan[nama] ($bantuan[lap])"); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
