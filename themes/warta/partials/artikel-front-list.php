<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php $article = $single_artikel ?>

<!--================ Artikel Front List Start =================-->
<?php if ($artikel) : ?>

	<div class="about-area2 white-bg pt-60 pb-60">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="whats-news-wrapper">
						<!-- Heading & Nav Button -->
						<div class="row justify-content-between align-items-end mb-15">
							<div class="col-xl-4">
								<div class="section-tittle mb-30">
									<h5>Posting Terbaru</h5>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
										<div class="row">
											<?php foreach ($artikel as $article) : ?>
												<?php $data['article'] = $article ?>
												<?php $url = site_url('artikel/' . buat_slug($article)) ?>
												<?php $abstract = potong_teks(strip_tags($article['isi']), 200) ?>
												<?php $image = ($article['gambar'] && is_file(LOKASI_FOTO_ARTIKEL . 'sedang_' . $article['gambar'])) ?
													AmbilFotoArtikel($article['gambar'], 'sedang') :
													base_url($this->theme_folder . '/' . $this->theme . '/assets/img/placeholder.png');
												?>
												<div class="col-xl-4 col-lg-4 col-md-4">
													<div class="whats-news-single mb-40 mb-40">
														<div class="whates-img">
															<?php if ($article['gambar']) : ?>
																<img class="img-fluid" src="<?= AmbilFotoArtikel($article['gambar'], 'sedang') ?>" alt="<?= $article['judul'] ?>">
															<?php else : ?>
																<img class="img-fluid" src="<?= base_url() ?>themes/warta/assets/img/noimage.png" alt="Belum Ada Gambar">
															<?php endif; ?>
														</div>
														<div class="whates-caption whates-caption2">
															<h4><a href="<?= site_url('artikel/' . buat_slug($article)) ?>"><?= $article['judul'] ?></a></h4>
															<span>by <?= $article['owner'] ?> - <?= tgl_indo($article['tgl_upload']) ?> - <?= $article['hit'] ?> view</span>
															<p><?= potong_teks($article['isi'], 100) ?></p>
														</div>
													</div>
												</div>
											<?php endforeach; ?>
										<?php endif; ?>
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
	<!--================ Artikel Front List Start =================-->