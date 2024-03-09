<!--   Weekly3-News start -->
<div class="weekly3-news-area pt-30 pb-30">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly3-news-active dot-style d-flex  wow fadeInUp" data-wow-delay="0.2s">
                                    <?php foreach (array('acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
                                        <?php foreach ($$jenis_arsip as $arsip) : ?>
                                            <div class="weekly3-single">
                                                <a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>">
                                                    <div class="weekly3-img">
                                                        <?php if ($arsip['gambar']) : ?>
                                                            <img src="<?= base_url(LOKASI_FOTO_ARTIKEL . 'kecil_' . $arsip['gambar']) ?>" alt="<?= $arsip['judul'] ?>">
                                                        <?php else : ?>
                                                            <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/blog/blog_4.png") ?>" alt="<?= $arsip['judul'] ?>">
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="weekly3-caption">
                                                        <h4><a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>"><?= $arsip['judul'] ?></a></h4>
                                                        <p><?= tgl_indo($arsip['tgl_upload']); ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endforeach ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Weekly-News -->