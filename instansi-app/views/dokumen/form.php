<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4>Dokumen <?= $kat_nama ?></h4>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= site_url('beranda') ?>"><i class="fa fa-home"></i> Home</a></li>
						<?php if (in_array($kat, array('2', '3'))) : ?>
							<li class="breadcrumb-item"><a href="<?= $kembali_ke ?: site_url("$this->controller/peraturan_desa/$kat"); ?>"><i class="fa fa-dashboard"></i> Daftar <?= $kat_nama ?></a></li>
						<?php else : ?>
							<li class="breadcrumb-item"><a href="<?= site_url("$this->controller/index/$kat"); ?>"><i class="fa fa-dashboard"></i> Daftar <?= $kat_nama ?></a></li>
						<?php endif; ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<form id="validasi" action="<?= $form_action ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
							<div class="card-header">
								<?php if (in_array($kat, array('2', '3'))) : ?>
									<a href="<?= $kembali_ke ?: site_url("$this->controller/peraturan_desa/$kat"); ?>" class="btn btn-box btn-info btn-sm btn-sm " title="Kembali">
										<i class="fa fa-arrow-circle-left "></i> Kembali Ke Daftar <?= $kat_nama ?>
									</a>
								<?php else : ?>
									<a href="<?= site_url("$this->controller/index/$kat"); ?>" class="btn btn-box btn-info btn-sm btn-sm " title="kembali">
										<i class="fa fa-arrow-circle-left "></i> Kembali Ke Daftar <?= $kat_nama ?>
									</a>
								<?php endif; ?>
							</div>
							<div class="card-body">
								<div class="form-group row">
									<label class="control-label col-sm-4" for="nama">Judul Dokumen</label>
									<div class="col">
										<input name="nama" class="col-sm-12 input-sm nomor_sk required" type="text" maxlength="200" value="<?= $dokumen['nama'] ?>"></input>
									</div>
								</div>
								<div class="form-group row">
									<label class="control-label col-sm-4" for="nama">Nama Dokumen</label>
									<div class="col">
										<input name="nama" class="col-sm-12 input-sm nomor_sk required" type="text" maxlength="200" value="<?= $dokumen['nama'] ?>"></input>
									</div>
								</div>
								<?php if ($dokumen['satuan']) : ?>
									<div class="form-group row">
										<label class="control-label col-sm-4 control-label">Dokumen</label>
										<div class="col">
											<input class="col-sm-8" type="hidden" name="old_file" value="<?= $dokumen['satuan'] ?>">
											<embed type="application/pdf" src="<?= base_url() . LOKASI_DOKUMEN . $dokumen['satuan'] ?>" width="100%" height="400" alt="<?= $dokumen['satuan'] ?>"></embed>
										</div>
									</div>
								<?php endif; ?>
								<div class="form-group row">
									<label class="control-label col-sm-4" for="upload">Unggah Dokumen</label>
									<div class="col">
										<input type="text" class="col-sm-6 <?php empty($dokumen) and print('required') ?>" id="file_path" name="satuan">
										<input id="file" type="file" class="hidden" name="satuan">
										<span class="input-group-btn">
											<button type="button" class="btn btn-sm btn-info btn-box" id="file_browser"><i class="fa fa-search"></i> Browse</button>
										</span>
										<?php if ($dokumen) : ?>
											<p class="small">(Kosongkan jika tidak ingin mengubah dokumen)</p>
										<?php endif; ?>
									</div>
								</div>
								<input name="kategori" type="hidden" value="<?= $dokumen['kategori'] ?: $kat; ?>">
								<?php
								if ($kat == 2 or $dokumen['kategori'] == 2)
									include("instansi-app/views/dokumen/_sk_kades.php");
								elseif ($kat == 3 or $dokumen['kategori'] == 3)
									include("instansi-app/views/dokumen/_perdes.php");
								else
									include("instansi-app/views/dokumen/_informasi_publik.php");
								?>
							</div>
							<div class='card-footer text-right'>
								<button type='reset' class='btn btn-box btn-danger btn-sm'><i class='fa fa-times'></i> Batal</button>
								<button type='submit' class='btn btn-box btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>