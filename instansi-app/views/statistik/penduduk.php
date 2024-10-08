<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4 class="m-0">Statistik</h4>
				</div>
				<div class="col-sm-6 text-xs">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= site_url() ?>beranda"><i class="fa fa-home"></i></a></li>
						<li class="breadcrumb-item active"> Statistik</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- /.content-header -->

	<section class="content">
		<form id="mainform" name="mainform" action="" method="post">
			<div class="row">
				<div class="col-md-4">
					<?php $this->load->view('statistik/side_menu.php'); ?>
				</div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<a href="<?= site_url("statistik/dialog/cetak"); ?>" class="btn btn-box bg-purple btn-sm " title="Cetak Laporan" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Laporan"><i class="fa fa-print "></i>Cetak
							</a>
							<a href="<?= site_url("statistik/dialog/unduh"); ?>" class="btn btn-box bg-navy btn-sm " title="Unduh Laporan" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Laporan"><i class="fa fa-print "></i>Unduh
							</a>
							<a class="btn btn-box bg-orange btn-sm btn-sm  grafikType" title="Grafik Data" id="grafikType" onclick="grafikType();">
								<i class="fa fa-bar-chart"></i>Grafik Data
							</a>
							<a class="btn btn-box btn-primary btn-sm btn-sm  pieType" title="Pie Data" id="pieType" onclick="pieType();">
								<i class="fa fa-pie-chart"></i>Pie Data
							</a>
							<?php if ($lap == '13'): ?>
								<a href="<?= site_url("statistik/rentang_umur"); ?>" class="btn btn-box bg-olive btn-sm btn-sm " title="Rentang Umur">
									<i class="fa fa-arrows-h"></i>Rentang Umur
								</a>
							<?php endif; ?>
							<a href="<?= site_url("{$this->controller}/clear/$lap") ?>" class="btn btn-box bg-purple btn-sm "><i class="fa fa-refresh"></i>Bersihkan Filter</a>
						</div>
						<div class="card-body">
							<?php if ($lap < 50): ?>
								<h4 class="card-title text-center"><b>Data Kependudukan Menurut <?= ($stat); ?></b></h4>
							<?php else: ?>
								<h4 class="card-title text-center"><b>Data Peserta Program <?= ($program['nama']); ?></b></h4>
							<?php endif; ?>
							<div id="chart" hidden="true"> </div>
						</div>
						<hr>
						<div class="card-body">
							<?php if (($lap <= 20 or $lap == 'bantuan_penduduk') and $lap <> 'kelas_sosial' and $lap <> 'bantuan_keluarga') : ?>
								<div class="row">
									<div class="col-sm-12 form-inline">
										<form action="" id="mainform" method="post">
											<select class="form-control input-sm " name="dusun" onchange="formAction('mainform','<?= site_url('statistik/dusun'); ?>')">
												<option value="">Pilih <?= ucwords($this->setting->sebutan_dusun); ?></option>
												<?php foreach ($list_dusun as $data): ?>
													<option value="<?= $data['dusun']; ?>" <?= selected($dusun, $data['dusun']); ?>><?= set_ucwords($data['dusun']); ?></option>
												<?php endforeach; ?>
											</select>
											<?php if ($dusun): ?>
												<select class="form-control input-sm" name="rw" onchange="formAction('mainform','<?= site_url('statistik/rw'); ?>')">
													<option value="">Pilih RW</option>
													<?php foreach ($list_rw as $data): ?>
														<option value="<?= $data['rw']; ?>" <?= selected($rw, $data['rw']); ?>><?= set_ucwords($data['rw']); ?></option>
													<?php endforeach; ?>
												</select>
											<?php endif; ?>
											<?php if ($rw): ?>
												<select class="form-control input-sm" name="rt" onchange="formAction('mainform','<?= site_url('statistik/rt'); ?>')">
													<option value="">Pilih RT</option>
													<?php foreach ($list_rt as $data): ?>
														<option value="<?= $data['rt']; ?>" <?= selected($rt, $data['rt']); ?>><?= set_ucwords($data['rt']); ?></option>
													<?php endforeach; ?>
												</select>
											<?php endif; ?>
										</form>
									</div>
								</div>
							<?php endif; ?>
							<div class="table-responsive">
								<table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
									<thead class="bg-gray color-palette">
										<tr>
											<th>No</th>
											<?php if ($order_by == 2): ?>
												<th><a href="<?= site_url("statistik/order_by/$lap/1"); ?>"><?= $judul_kelompok; ?><i class='fa fa-sort-asc fa-sm'></i></a></th>
											<?php elseif ($order_by == 1): ?>
												<th><a href="<?= site_url("statistik/order_by/$lap/2"); ?>"><?= $judul_kelompok; ?><i class='fa fa-sort-desc fa-sm'></i></a></th>
											<?php else: ?>
												<th><a href="<?= site_url("statistik/order_by/$lap/1"); ?>"><?= $judul_kelompok; ?><i class='fa fa-sort fa-sm'></i></a></th>
											<?php endif; ?>
											<?php if ($order_by == 6): ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/5"); ?>">Jumlah<i class='fa fa-sort-asc fa-sm'></i></a></th>
											<?php elseif ($order_by == 5): ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/6"); ?>">Jumlah<i class='fa fa-sort-desc fa-sm'></i></a></th>
											<?php else: ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/5"); ?>">Jumlah<i class='fa fa-sort fa-sm'></i></a></th>
											<?php endif; ?>
											<?php if ($order_by == 4): ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/3"); ?>">Laki-Laki<i class='fa fa-sort-asc fa-sm'></i></a></th>
											<?php elseif ($order_by == 3): ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/4"); ?>">Laki-Laki<i class='fa fa-sort-desc fa-sm'></i></a></th>
											<?php else: ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/3"); ?>">Laki-Laki<i class='fa fa-sort fa-sm'></i></a></th>
											<?php endif; ?>
											<?php if ($order_by == 8): ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/7"); ?>">Perempuan<i class='fa fa-sort-asc fa-sm'></i></a></th>
											<?php elseif ($order_by == 7): ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/8"); ?>">Perempuan<i class='fa fa-sort-desc fa-sm'></i></a></th>
											<?php else: ?>
												<th colspan="2"><a href="<?= site_url("statistik/order_by/$lap/7"); ?>">Perempuan<i class='fa fa-sort fa-sm'></i></a></th>
											<?php endif; ?>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($main as $data): ?>
											<?php if ($lap > 50) $tautan_jumlah = site_url("program_bantuan/detail/$lap/1"); ?>
											<tr>
												<td class="padat"><?= $data['no']; ?></td>
												<td class="text-left"><?= strtoupper($data['nama']); ?></td>
												<td class="text-right">
													<?php if (in_array($lap, array(21, 22, 23, 24, 25, 26, 27, 'kelas_sosial', 'bantuan_keluarga'))): ?>
														<a href="<?= site_url("keluarga/statistik/$lap/$data[id]"); ?>/0" target="_blank"><?= $data['jumlah']; ?></a>
													<?php else: ?>
														<?php if ($lap < 50) $tautan_jumlah = site_url("penduduk/statistik/$lap/$data[id]"); ?>
														<a href="<?= $tautan_jumlah ?>/0" target="_blank"><?= $data['jumlah']; ?></a>
													<?php endif; ?>
												</td>
												<td class="text-right"><?= $data['persen']; ?></td>
												<?php if (in_array($lap, array(21, 22, 23, 24, 25, 26, 27, 'kelas_sosial', 'bantuan_keluarga'))):
													$tautan_jumlah = site_url("keluarga/statistik/$lap/$data[id]");
												elseif ($lap < 50):
													$tautan_jumlah = site_url("penduduk/statistik/$lap/$data[id]");
												endif; ?>
												<td class="text-right"><a href="<?= $tautan_jumlah ?>/1" target="_blank"><?= $data['laki']; ?></a></td>
												<td class="text-right"><?= $data['persen1']; ?></td>
												<td class="text-right"><a href="<?= $tautan_jumlah ?>/2" target="_blank"><?= $data['perempuan']; ?></a></td>
												<td class="text-right"><?= $data['persen2']; ?></td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<?php if (in_array($lap, array('bantuan_keluarga', 'bantuan_penduduk'))): ?>
								<p class="text-muted text-justify text-red"><b>Catatan:</b>
									<br>
									1. Pada jumlah PENERIMA, setiap peserta terhitung satu sekali saja, meskipun menerima lebih dari satu jenis bantuan.
									<br>
									2. Jumlah BUKAN PENERIMA dan TOTAL berdasarkan jumlah peserta yang aktif saat ini.
								</p>
								<br><br>
							<?php endif; ?>
							<?php if ($lap > 50): ?>
								<p class="text-muted text-justify text-red"><b>Catatan:</b>
									<br>
									1. Jumlah BUKAN PESERTA dan TOTAL berdasarkan jumlah peserta yang aktif saat ini.
								</p>
							<?php endif; ?>
						</div>

						<?php if (in_array($lap, array('bantuan_keluarga', 'bantuan_penduduk'))): ?>
							<?php $this->load->view('statistik/peserta_bantuan'); ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</form>
	</section>
</div>


<script type="text/javascript">
	var chart;

	function grafikType() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'chart',
				defaultSeriesType: 'column'
			},
			title: 0,
			xAxis: {
				title: {
					text: '<?= $stat ?>'
				},
				categories: [
					<?php $i = 0;
					foreach ($main as $data): $i++; ?>
						<?php if ($data['jumlah'] != "-"): ?><?= "'$i',"; ?><?php endif; ?>
					<?php endforeach; ?>
				]
			},
			yAxis: {
				title: {
					text: 'Jumlah Populasi'
				}
			},
			legend: {
				layout: 'vertical',
				enabled: false
			},
			plotOptions: {
				series: {
					colorByPoint: true
				},
				column: {
					pointPadding: 0,
					borderWidth: 0
				}
			},
			series: [{
				shadow: 1,
				border: 1,
				data: [
					<?php foreach ($main as $data): ?>
						<?php if (!in_array($data['nama'], array("TOTAL", "JUMLAH", "PENERIMA"))): ?>
							<?php if ($data['jumlah'] != "-"): ?>['<?= strtoupper($data['nama']); ?>', <?= $data['jumlah']; ?>],
							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				]
			}]
		});

		$('#chart').removeAttr('hidden');
	}

	function pieType() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'chart',
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: 0,
			plotOptions: {
				index: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: true
					},
					showInLegend: true
				}
			},
			legend: {
				layout: 'vertical',
				backgroundColor: '#FFFFFF',
				align: 'right',
				verticalAlign: 'top',
				x: -30,
				y: 0,
				floating: true,
				shadow: true,
				enabled: true
			},
			series: [{
				type: 'pie',
				name: 'Populasi',
				data: [
					<?php foreach ($main as $data): ?>
						<?php if (!in_array($data['nama'], array("TOTAL", "JUMLAH", "PENERIMA"))): ?>
							<?php if ($data['jumlah'] != "-"): ?>["<?= strtoupper($data['nama']); ?>", <?= $data['jumlah']; ?>],
							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; ?>
				]
			}]
		});

		$('#chart').removeAttr('hidden');
	}
</script>