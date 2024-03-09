<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<!--================Blog Area =================-->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php if (count($farsip) > 0) : ?>
                        <?php foreach ($farsip as $data) : ?>
                            <article class="blog_item">
                                <div class="blog_item_img">

                                    <?php if ($data['gambar']) : ?>
                                        <img class="card-img rounded-0" src="<?= AmbilFotoArtikel($data['gambar' . $i], 'sedang') ?>" alt="<?= $data['judul'] ?>">
                                    <?php else : ?>
                                        <img class="card-img rounded-0" src="<?= base_url("$this->theme_folder/$this->theme/assets/img/noimage.png") ?>" alt="<?= $data['judul'] ?>">
                                    <?php endif ?>

                                    <a href="#" class="blog_item_date">
                                        <p><?= tgl_indo($data['tgl_upload']) ?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="#">
                                        <h2><?= $data['judul'] ?></h2>
                                    </a>
                                    <p><?= potong_teks($data['isi'], 150) ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> <?= $data['owner'] ?></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i> <?= $data['hit'] ?> </a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i> <?= tgl_indo($data['tgl_upload']) ?> </a></li>
                                    </ul>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view($folder_themes . '/partials/arsip-sidebar') ?>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->