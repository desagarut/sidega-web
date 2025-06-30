<!-- Start Video Area -->
<div class="weekly2-news-area pt-40 pb-40">
    <div class="container">
        <div class="weekly2-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper">
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-4">
                                <div class="section-tittle mb-30">
                                    <h5>Gallery Video Youtube</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Slider -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weekly2-news-active dot-style d-flex  wow fadeInUp" data-wow-delay="0.2s">
                                    <?php foreach ($gallery as $data) : ?>
                                        <?php if ($data['link']) : ?>
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <iframe height="200px" width="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $data["link"]; ?>" title="<?= $data['nama'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="<?= site_url("first/gallery_youtube/{$data['id']}") ?>"><?= $data['nama'] ?></a></h4>
                                                </div>
                                            </div>
                                        <?php endif; ?>
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
<!-- End Start Video area-->