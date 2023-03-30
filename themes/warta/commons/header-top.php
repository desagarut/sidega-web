<div class="header-top black-bg d-none d-sm-block">
    <div class="container">
        <div class="col-xl-12">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="header-info-left weekly3-news-active dot-style d-flex slick-initialized slick-slider slick-dotted">
                    <ul>
                        <li class="title"><span class="flaticon-energy"></span> kabar trending</li>
                        <li class="title"><?php // $this->load->view($folder_themes .'/widgets/running_text') 
                                            ?>
                            <?php foreach ($teks_berjalan as $teks) : ?>
                                <a href="<?= $teks['tautan'] ?>" title="Baca Selengkapnya">
                                    <marquee onmouseover="this.stop()" onmouseout="this.start()"> <?= $teks['teks'] ?>
                                        <?php if ($teks['tautan']) : ?>
                                            <?= $teks['judul_tautan'] ?>
                                        <?php endif; ?>
                                    </marquee>
                                </a>
                            <?php endforeach; ?>
                        </li>
                    </ul>
                </div>
                <div class="header-info-right">
                    <ul class="header-date">
                        <li><span class="flaticon-calendar"></span> <?= $desa['email_website']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>