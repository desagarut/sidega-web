<script type="text/javascript">
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
					<h4 class="m-0">Daftar Channel Live TV</h4>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>beranda">Beranda</a></li>
						<li class="breadcrumb-item active"><a href="#!">Negara</a></li>
						<li class="breadcrumb-item active"><a href="#!">Live TV</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<section class="content" id="maincontent">
		<form id="mainform" name="mainform" action="" method="post">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-default">
						<div class="card-header with-border">
							<a href="<?= site_url("live_tv/form_sub_gallery/$gallery") ?>" class="btn btn-social btn-box btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Tambah Album">
								<i class="fa fa-plus"></i> Tambah Saluran
							</a>
							<?php if ($this->CI->cek_hak_akses('h')) : ?>
								<a href="#confirm-delete" title="Hapus Data" onclick="deleteAllBox('mainform', '<?= site_url("live_tv/delete_all_sub_gallery/$gallery") ?>')" class="btn btn-social btn-box btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block hapus-terpilih"><i class='fa fa-trash-o'></i> Hapus Data Terpilih</a>
							<?php endif; ?>
							<a href="<?= site_url("live_tv") ?>" class="btn btn-social btn-box btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Album">
								<i class="fa fa-arrow-circle-left "></i>Back
							</a>
						</div>
						<div class="card-header with-border">
							<h3 class="card-title">Negara : <strong><?= $sub['nama'] ?></strong></h3>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
										<form id="mainform" name="mainform" action="" method="post">
											<div class="row">
												<div class="col-sm-6">
													<select class="form-control input-sm " name="filter" onchange="formAction('mainform', '<?= site_url("live_tv/filter/$gallery") ?>')">
														<option value="">Semua</option>
														<option value="1" <?php if ($filter == 1) : ?>selected<?php endif ?>>Aktif</option>
														<option value="2" <?php if ($filter == 2) : ?>selected<?php endif ?>>Tidak Aktif</option>
													</select>
												</div>
												<div class="col-sm-6">
													<div class="box-tools">
														<div class="input-group input-group-sm pull-right">
															<input name="cari" id="cari" class="form-control" placeholder="Cari..." type="text" value="<?= html_escape($cari) ?>" onkeypress="if (event.keyCode == 13):$('#'+'mainform').attr('action', '<?= site_url('live_tv/search/$gallery') ?>');$('#'+'mainform').submit();endif">
															<div class="input-group-btn">
																<button type="submit" class="btn btn-default" onclick="$('#'+'mainform').attr('action', '<?= site_url("live_tv/search/$gallery") ?>');$('#'+'mainform').submit();"><i class="fa fa-search"></i></button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12">
													<div class="table-responsive">
														<table class="table table-bordered table-striped dataTable table-hover">
															<thead class="disabled color-palette">
																<tr>
																	<th><input type="checkbox" id="checkall" /></th>
																	<th>No</th>
																	<th>Video Depan</th>
																	<?php if ($o == 2) : ?>
																		<th><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/1") ?>">Channel TV <i class='fa fa-sort-asc fa-sm'></i></a></th>
																	<?php elseif ($o == 1) : ?>
																		<th><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/2") ?>">Channel TV <i class='fa fa-sort-desc fa-sm'></i></a></th>
																	<?php else : ?>
																		<th><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/1") ?>">Channel TV <i class='fa fa-sort fa-sm'></i></a></th>
																	<?php endif; ?>
																	<th width=20%>Deskripsi</th>
																	<?php if ($o == 4) : ?>
																		<th nowrap><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/3") ?>">Aktif <i class='fa fa-sort-asc fa-sm'></i></a></th>
																	<?php elseif ($o == 3) : ?>
																		<th nowrap><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/4") ?>">Aktif <i class='fa fa-sort-desc fa-sm'></i></a></th>
																	<?php else : ?>
																		<th nowrap><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/3") ?>">Aktif <i class='fa fa-sort fa-sm'></i></a></th>
																	<?php endif; ?>
																	<?php if ($o == 6) : ?>
																		<th nowrap><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/5") ?>">Dimuat Pada <i class='fa fa-sort-asc fa-sm'></i></a></th>
																	<?php elseif ($o == 5) : ?>
																		<th nowrap><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/6") ?>">Dimuat Pada <i class='fa fa-sort-desc fa-sm'></i></a></th>
																	<?php else : ?>
																		<th nowrap><a href="<?= site_url("live_tv/statsiun_tv/$gallery/$p/5") ?>">Dimuat Pada <i class='fa fa-sort fa-sm'></i></a></th>
																	<?php endif; ?>
																	<th>Aksi</th>
																</tr>
															</thead>
															<tbody>
																<?php foreach ($statsiun_tv as $data) : ?>
																	<tr>
																		<td><input type="checkbox" name="id_cb[]" value="<?= $data['id'] ?>" /></td>
																		<td><?= $data['no'] ?></td>
																		<td class="padat">
																			<iframe height="160px" width="250px" class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $data["link"]; ?>" title="<?= $data['nama'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></br>
																		</td>
																		<td>
																			<strong><?= $data['nama'] ?><strong>
																		</td>
																		<td>
																			<?= $data['deskripsi'] ?>
																		</td>
																		<td><?= $data['aktif'] ?></td>
																		<td nowrap><?= tgl_indo2($data['tgl_upload']) ?></td>
																		<td nowrap>
																			<a href="<?= site_url("live_tv/urut/$data[id]/1/$sub[id]") ?>" class="btn bg-olive btn-box btn-sm" title="Pindah Posisi Ke Bawah"><i class="fa fa-arrow-down"></i></a>
																			<a href="<?= site_url("live_tv/urut/$data[id]/2/$sub[id]") ?>" class="btn bg-olive btn-box btn-sm" title="Pindah Posisi Ke Atas"><i class="fa fa-arrow-up"></i></a>
																			</br>
																			<a href="<?= site_url("live_tv/form_sub_gallery/$gallery/$data[id]") ?>" class="btn btn-warning btn-box btn-sm" title="Ubah"><i class="fa fa-edit"></i></a>
																			<?php if ($this->CI->cek_hak_akses('h')) : ?>
																				<?php if ($data['enabled'] == '2') : ?>
																					<a href="<?= site_url("live_tv/gallery_lock/" . $data['id'] . "/$gallery") ?>" class="btn bg-navy btn-box btn-sm" title="Aktifkan Gambar"><i class="fa fa-lock">&nbsp;</i></a>
																				<?php elseif ($data['enabled'] == '1') : ?>
																					<a href="<?= site_url("live_tv/gallery_unlock/" . $data['id'] . "/$gallery") ?>" class="btn bg-navy btn-box btn-sm" title="Non Aktifkan Gambar"><i class="fa fa-unlock"></i></a>
																				<?php endif ?>
																				<a href="#" data-href="<?= site_url("live_tv/delete_sub_gallery/$gallery/$data[id]") ?>" class="btn bg-maroon btn-box btn-sm" title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash"></i></a>
																			<?php endif; ?>
																		</td>
																	</tr>
																<?php endforeach; ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer clearfix">
							<div class="row">
								<div class="col-sm-6">
									<div class="dataTables_length">
										<form id="paging" action="<?= site_url("live_tv/statsiun_tv/$gallery") ?>" method="post" class="form-horizontal">
											<label>
												<div class="row">
													<div class="col-sm-5">
														<select name="per_page" class="form-control input-sm" onchange="$('#paging').submit()">
															<option value="20" <?php selected($per_page, 20); ?>>20</option>
															<option value="50" <?php selected($per_page, 50); ?>>50</option>
															<option value="100" <?php selected($per_page, 100); ?>>100</option>
														</select>
													</div>
													<div class="col-sm-7">
														Total Data: <strong><?= $paging->num_rows ?></strong>
													</div>
												</div>
											</label>
										</form>
									</div>
								</div>
								<div class="col-sm-6">
									<ul class="pagination pagination-sm m-0 float-right">
										<?php if ($paging->start_link) : ?>
											<li class="page-item"><a class="page-link" href="<?= site_url("live_tv/statsiun_tv/$gallery/$paging->start_link/$o") ?>" aria-label="First"><span aria-hidden="true">Awal</span></a></li>
										<?php endif; ?>
										<?php if ($paging->prev) : ?>
											<li class="page-item"><a class="page-link" href="<?= site_url("live_tv/statsiun_tv/$gallery/$paging->prev/$o") ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
										<?php endif; ?>
										<?php for ($i = $paging->start_link; $i <= $paging->end_link; $i++) : ?>
											<li <?= jecho($p, $i, "class='page-item active'") ?>><a class="page-link" href="<?= site_url("live_tv/statsiun_tv/$gallery/$i/$o") ?>"><?= $i ?></a></li>
										<?php endfor; ?>
										<?php if ($paging->next) : ?>
											<li class="page-item"><a class="page-link" href="<?= site_url("live_tv/statsiun_tv/$gallery/$paging->next/$o") ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
										<?php endif; ?>
										<?php if ($paging->end_link) : ?>
											<li class="page-item"><a class="page-link" href="<?= site_url("live_tv/statsiun_tv/$gallery/$paging->end_link/$o") ?>" aria-label="Last"><span aria-hidden="true">Akhir</span></a></li>
										<?php endif; ?>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</form>
	</section>
</div>
<?php $this->load->view('global/confirm_delete'); ?>