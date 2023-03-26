<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="pcoded-main-container">
	<div class="pcoded-content">

	<div class="page-header">
		<h5 class="m-b-10">Profil Terdata Data Suplemen</h5>
		<ul class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('suplemen')?>"><i class="fa fa-home"></i> Data Suplemen</a></li>
						<li class="breadcrumb-item active">Profil Terdata Data Suplemen</li>
					</ol>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<div class="card">
		
			<div class="card-header">
				<a href="<?= site_url()?>suplemen" class="btn btn-box btn-info btn-sm "><i class="fa fa-arrow-circle-left"></i> Kembali Ke Data Suplemen</a>
			</div>
			<div class="card-body">
				<h5><b>Profil Terdata</b></h5>
				<div class="table-responsive">
					<table class="table table-bordered table-striped table-hover tabel-rincian">
						<tbody>
							<tr>
								<td width="20%">Nama</td>
								<td width="1%">:</td>
								<td><?= strtoupper($profil["nama"])?></td>
							</tr>
							<tr>
								<td>Keterangan</td>
								<td>:</td>
								<td><?= $profil["ndesc"]?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="card-body">
				<h5><b>Suplemen Yang Terdata</b></h5>
				<div class="table-responsive">
					<table class="table table-bordered dataTable table-hover tabel-daftar">
						<thead class="bg-gray disabled color-palette">
							<tr>
								<th>No</th>
								<th>Nama Suplemen</th>
								<th width="65%">Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($daftar_suplemen as $key => $item): ?>
								<tr>
									<td class="padat"><?= ($key + 1); ?></td>
									<td><a href="<?= site_url("suplemen/rincian/$item[id]"); ?>"><?= $item["nama"] ?></a></td>
									<td><?= $item["keterangan"];?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

