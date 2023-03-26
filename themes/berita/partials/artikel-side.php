<div class="blog_right_sidebar">

    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title">Newsletter</h4>
        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
        </form>
    </aside>

    <aside class="single_sidebar_widget search_widget">
        <form action="#">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                    <div class="input-group-append">
                        <button class="btns" type="button"><i class="ti-search"></i></button>
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
        </form>
    </aside>
    
    <aside class="single_sidebar_widget popular_post_widget">
        <div class="row shadow" style="padding: 10px 10px 10px 10px">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="tab">
                    <button class="nav-link active" id="pills-terkini-tab" data-bs-toggle="pill" data-bs-target="#terkini" type="button" role="tab" aria-controls="pills-terkini" aria-selected="true">Terbaru</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-populer-tab" data-bs-toggle="pill" data-bs-target="#populer" type="button" role="presentation" aria-controls="pills-populer" aria-selected="true">Populer</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-acak-tab" data-bs-toggle="pill" data-bs-target="#acak" type="button" role="presentation" aria-controls="pills-populer" aria-selected="true">Acak</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <?php foreach (array('terkini' => 'arsip_terkini', 'populer' => 'arsip_populer', 'acak' => 'arsip_acak') as $jenis => $jenis_arsip) : ?>
                    <div id="<?= $jenis ?>" class="tab-pane fade show <?php ($jenis == 'terkini') and print('active') ?>" role="tabpanel">
                        <table id="ul-menu">
                            <?php foreach ($$jenis_arsip as $arsip) : ?>
                                <tr>
                                    <td colspan="2" style="font-size: 11px;">
                                        <span class="meta_date"><i class="fa fa-clock"></i> <?= tgl_indo($arsip['tgl_upload']); ?> | <i class="fa fa-eye"></i> <?= hit($arsip['hit']); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" align="justify">
                                        <a href="<?= site_url('artikel/' . buat_slug($arsip)) ?>">
                                            <?php if (is_file(LOKASI_FOTO_ARTIKEL . 'sedang_' . $arsip[gambar])) : ?>
                                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url(LOKASI_FOTO_ARTIKEL . 'sedang_' . $arsip[gambar]) ?>" />
                                            <?php else : ?>
                                                <img width="25%" style="float:left; margin:0 8px 4px 0;" class="img-fluid img-thumbnail" src="<?= base_url('assets/images/404-image-not-found.jpg') ?>" />
                                            <?php endif; ?>
                                            <small>
                                                <font color="green"><?= $arsip['judul'] ?></font>
                                            </small>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </aside>
    <!--
<div class="row shadow" style="padding: 10px 10px 10px 10px">
    <?php $nama = potong_teks($data['isi'], 10); ?>
    <div class="text-end py-3 mt-2">
        <a class="btn btn-info py-3 px-5 mt-2" style="border-radius: 30px 0 0 30px;" href="<?= site_url("first/gallery_youtube/{$data['id']}") ?>">Youtube</a>
    </div>
    <?php foreach ($gallery_youtube as $data) : ?>
        <?php if ($data['link']) : ?>

            <div class="row">
                <div class="product-img col-sm-6">
                    <iframe height="100px" width="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $data["link"]; ?>" title="<?= $data['nama'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-sm-6 text-end">
                    <a href="<?= site_url("first/sub_gallery_youtube/{$data['id']}") ?>" style="font-size:11px">
                        <?= $data['nama'] ?>
                        <!-- <span class="label label-warning pull-right">$1800</span>-->
    <!--                   </a><br />
                    <span class="product-description">
                        <small><?= $data['tgl_upload'] ?></small>
                    </span>
                </div>
            </div>
            &nbsp;
        <?php endif; ?>
    <?php endforeach; ?>
</div>
                    -->


    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Category</h4>
        <ul class="list cat-list">
            <li>
                <a href="#" class="d-flex">
                    <p>Resaurant food</p>
                    <p>(37)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Travel news</p>
                    <p>(10)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Modern technology</p>
                    <p>(03)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Product</p>
                    <p>(11)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Inspiration</p>
                    <p>(21)</p>
                </a>
            </li>
            <li>
                <a href="#" class="d-flex">
                    <p>Health Care</p>
                    <p>(21)</p>
                </a>
            </li>
        </ul>
    </aside>

    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Recent Post</h3>
        <div class="media post_item">
            <img src="assets/img/post/post_1.png" alt="post">
            <div class="media-body">
                <a href="single-blog.html">
                    <h3>From life was you fish...</h3>
                </a>
                <p>January 12, 2019</p>
            </div>
        </div>
        <div class="media post_item">
            <img src="assets/img/post/post_2.png" alt="post">
            <div class="media-body">
                <a href="single-blog.html">
                    <h3>The Amazing Hubble</h3>
                </a>
                <p>02 Hours ago</p>
            </div>
        </div>
        <div class="media post_item">
            <img src="assets/img/post/post_3.png" alt="post">
            <div class="media-body">
                <a href="single-blog.html">
                    <h3>Astronomy Or Astrology</h3>
                </a>
                <p>03 Hours ago</p>
            </div>
        </div>
        <div class="media post_item">
            <img src="assets/img/post/post_4.png" alt="post">
            <div class="media-body">
                <a href="single-blog.html">
                    <h3>Asteroids telescope</h3>
                </a>
                <p>01 Hours ago</p>
            </div>
        </div>
    </aside>
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title">Tag Clouds</h4>
        <ul class="list">
            <li>
                <a href="#">project</a>
            </li>
            <li>
                <a href="#">love</a>
            </li>
            <li>
                <a href="#">technology</a>
            </li>
            <li>
                <a href="#">travel</a>
            </li>
            <li>
                <a href="#">restaurant</a>
            </li>
            <li>
                <a href="#">life style</a>
            </li>
            <li>
                <a href="#">design</a>
            </li>
            <li>
                <a href="#">illustration</a>
            </li>
        </ul>
    </aside>
    <aside class="single_sidebar_widget instagram_feeds">
        <h4 class="widget_title">Instagram Feeds</h4>
        <ul class="instagram_row flex-wrap">
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                </a>
            </li>
        </ul>
    </aside>
</div>