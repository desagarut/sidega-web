<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if (count($slider_gambar) > 0) : ?>

    <!-- Trending Area Start -->
    <div class="trending-area fix pt-25 white-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slider-active">
                            <?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
                                <?php $file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar']; ?>
                                <?php if (is_file($file_gambar)) : ?>
                                    <div class="single-slider">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img d-flex wow fadeIn" data-wow-delay="0.2s">
                                                <?php if ($slider_gambar['gambar']) : ?>
                                                    <a href="<?= site_url('artikel/' . buat_slug($gambar)) ?>"><img src="<?php echo base_url() . $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar'] ?>" alt="<?= $gambar['judul'] ?>" style="width: 100%;"></a>
                                                <?php else : ?>
                                                    <a href="<?= site_url('artikel/' . buat_slug($gambar)) ?>"><img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/noimage.png") ?>" alt="<?= $gambar['judul'] ?>" style="width: 100%;"></a>
                                                <?php endif ?>
                                                <div class="trend-top-cap">
                                                    <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms"><?= $gambar['id_kategori'] ?></span>
                                                    <h2><a href="<?= 'artikel/' . buat_slug($gambar); ?>" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"><?= $gambar['judul'] ?></a></h2>
                                                    <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms"><?= tgl_indo($gambar['tgl_upload']) ?> - <?= $gambar['hri'] ?>/<?= $gambar['bln'] ?>/<?= $gambar['thn'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $active = false; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <?php $this->load->view($folder_themes . '/partials/trending-top') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>