<!-- Partner start -->
<div class="weekly2-news-area pt-30 pb-30 gray-bg">
    <div class="container">
        <div class="weekly2-wrapper">
            <div class="row">
                <!-- Banner -->
                <div class="col-lg-12">
                    <div class="slider-wrapper wow fadeInUp" data-wow-delay="0.2s">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="small-tittle mb-30">
                                    <h4>Mitra Desa Garut</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="weekly2-news-active">
                                    <?php foreach ($sinergi_program as $key => $program) : ?>
                                        <?php $baris[$program['baris']][$program['kolom']] = $program; ?>
                                    <?php endforeach; ?>

                                    <?php foreach ($baris as $baris_program) : ?>
                                        <?php $width = 100 / count($baris_program) - count($baris_program) ?>
                                        <?php foreach ($baris_program as $key => $program) : ?>
                                            <div class="col-md-4 weekly2-single">
                                                <a href=" <?= $program['tautan'] ?>">
                                                    <div class="weekly2-img">
                                                        <?php if ($arsip['gambar']) : ?>
                                                            <img src="<?= base_url() . LOKASI_GAMBAR_WIDGET . $program['gambar'] ?>" alt="<?= $program['judul'] ?>">
                                                        <?php else : ?>
                                                            <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/noimage.png") ?>" alt="<?= $program['judul'] ?>">
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="weekly2-caption">
                                                        <h4><a href="<?= $program['tautan'] ?>"><?= $program['judul'] ?></a></h4>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner -->