<!-- Partner start -->
<div class="weekly3-news-area pt-40 pb-40">
    <div class="container">
        <div class="weekly3-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly3-news-active dot-style d-flex  wow fadeInUp" data-wow-delay="0.2s">
                                    <?php foreach ($sinergi_program as $key => $program) : ?>
                                        <?php $baris[$program['baris']][$program['kolom']] = $program; ?>

                                        <?php foreach ($baris as $baris_program) : ?>
                                            <?php $width = 100 / count($baris_program) - count($baris_program) ?>
                                            <?php foreach ($baris_program as $key => $program) : ?>

                                                <div class="weekly3-single">
                                                    <a href=" <?= $program['tautan'] ?>">
                                                        <div class="weekly3-img" style="max-width:100%; max-height:auto">
                                                            <?php if ($program['gambar']) : ?>
                                                                <img src="<?= base_url() . LOKASI_GAMBAR_WIDGET . $program['gambar'] ?>" alt="<?= $program['judul'] ?>">
                                                            <?php else : ?>
                                                                <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/noimage.png") ?>" alt="<?= $program['judul'] ?>">
                                                            <?php endif ?>
                                                        </div>
                                                        <div class="weekly3-caption text-center">
                                                            <h4><a href="<?= $program['tautan'] ?>"><?= $program['judul'] ?></a></h4>
                                                        </div>
                                                    </a>
                                                </div>

                                            <?php endforeach; ?>
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