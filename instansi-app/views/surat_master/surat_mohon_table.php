<script>
	$(function() {
		var keyword = <?= $keyword ?>;
		$("#cari").autocomplete({
			source: keyword,
			maxShowItems: 10,
		});
	});
</script>
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4 class="m-0">Pengaturan Surat <?= $detail['nama']; ?></h4>
				</div>
				<!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li><a href="<?= site_url('beranda') ?>"><i class="fa fa-home"></i> Home</a></li>
						<li class="breadcrumb-item active">Daftar Dokumen Persyaratan Surat</li>
					</ol>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<div class="card">
		<div class="row">
			<div class="col-md-12">

				<div class="card-header">
					<a href="<?= site_url('surat_mohon/form') ?>" class="btn btn-box btn-success btn-sm "><i class="fa fa-plus"></i> Tambah Dokumen Persyaratan</a>
					<a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform','<?= site_url("surat_mohon/delete_all/$p/$o") ?>')" class="btn btn-box btn-danger btn-sm  hapus-terpilih"><i class='fa fa-trash'></i> Hapus Data Terpilih</a>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<form id="mainform" name="mainform" action="" method="post">
									<div class="row">
										<div class="col-sm-12">
											<div class="box-tools">
												<div class="input-group input-group-sm pull-right">
													<input name="cari" id="cari" class="form-control" placeholder="Cari..." type="text" value="<?= html_escape($cari) ?>" onkeypress="if (event.keyCode == 13) {$('#'+'mainform').attr('action','<?= site_url('surat_mohon/search') ?>');$('#'+'mainform').submit();}">
													<div class="input-group-btn">
														<button type="submit" class="btn btn-default" onclick="$('#'+'mainform').attr('action','<?= site_url("surat_mohon/search") ?>');$('#'+'mainform').submit();"><i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="table-responsive">
												<table class="table table-bordered table-striped dataTable table-hover">
													<thead class="bg-gray disabled color-palette">
														<tr>
															<th><input type="checkbox" id="checkall" /></th>
															<th>No</th>
															<th>Aksi</th>
															<?php if ($o == 2) : ?>
																<th nowrap><a href="<?= site_url("surat_mohon/index/$cat/$p/1") ?>">Nama Dokumen <i class='fa fa-sort-asc fa-sm'></i></a></th>
															<?php elseif ($o == 1) : ?>
																<th nowrap><a href="<?= site_url("surat_mohon/index/$cat/$p/2") ?>">Nama Dokumen <i class='fa fa-sort-desc fa-sm'></i></a></th>
															<?php else : ?>
																<th nowrap><a href="<?= site_url("surat_mohon/index/$cat/$p/1") ?>">Nama Dokumen <i class='fa fa-sort fa-sm'></i></a></th>
															<?php endif; ?>
														</tr>
													</thead>
													<tbody>
														<?php foreach ($main as $data) : ?>
															<tr>
																<td width=2>
																	<input type="checkbox" name="id_cb[]" value="<?= $data['ref_syarat_id'] ?>" />
																</td>
																<td width=3><?= $data['no'] ?></td>
																<td width=100 nowrap>
																	<a href="<?= site_url("surat_mohon/form/$p/$o/$data[ref_syarat_id]") ?>" class="btn bg-orange btn-box btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
																	<a href="#" data-href="<?= site_url("surat_mohon/delete/$p/$o/$data[ref_syarat_id]") ?>" class="btn bg-maroon btn-box btn-sm" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
																</td>
																<td><?= $data['ref_syarat_nama'] ?></td>
															</tr>
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</form>
								<div class="row">
									<div class="col-sm-6">
										<div class="dataTables_length">
											<form id="paging" action="<?= site_url("surat_mohon") ?>" method="post" class="form-horizontal">
												<label>
													Tampilkan
													<select name="per_page" class="form-control input-sm" onchange="$('#paging').submit()">
														<option value="20" <?php selected($per_page, 20); ?>>20</option>
														<option value="50" <?php selected($per_page, 50); ?>>50</option>
														<option value="100" <?php selected($per_page, 100); ?>>100</option>
													</select>
													Dari
													<strong><?= $paging->num_rows ?></strong>
													Total Data
												</label>
											</form>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="dataTables_paginate paging_simple_numbers">
											<ul class="pagination">
												<?php if ($paging->start_link) : ?>
													<li><a href="<?= site_url("surat_mohon/index/$paging->start_link/$o") ?>" aria-label="First"><span aria-hidden="true">Awal</span></a></li>
												<?php endif; ?>
												<?php if ($paging->prev) : ?>
													<li><a href="<?= site_url("surat_mohon/index/$paging->prev/$o") ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
												<?php endif; ?>
												<?php for ($i = $paging->start_link; $i <= $paging->end_link; $i++) : ?>
													<li><a href="<?= site_url("surat_mohon/index/$cat/$i/$o") ?>"><?= $i ?></a></li>
												<?php endfor; ?>
												<?php if ($paging->next) : ?>
													<li><a href="<?= site_url("surat_mohon/index/$paging->next/$o") ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
												<?php endif; ?>
												<?php if ($paging->end_link) : ?>
													<li><a href="<?= site_url("surat_mohon/index/$paging->end_link/$o") ?>" aria-label="Last"><span aria-hidden="true">Akhir</span></a></li>
												<?php endif; ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('global/confirm_delete'); ?>