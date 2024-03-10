<!-- ======= Gallery Foto ======= -->
<div class="weekly2-news-area pt-40 pb-40">
  <div class="container">
    <div class="weekly2-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="slider-wrapper">
            <div class="row justify-content-between align-items-end mb-15">
              <div class="col-xl-4">
                <div class="section-tittle mb-30">
                  <h5>Gallery Foto Kegiatan</h5>
                </div>
              </div>
            </div>
            <!-- Slider -->
            <div class="row">
              <div class="col-lg-12">
                <div class="weekly2-news-active dot-style d-flex  wow fadeInUp" data-wow-delay="0.2s">
                  <?php foreach ($w_gal as $data) : ?>
                    <div class="weekly2-single">
                      <a href="<?= site_url("first/sub_gallery/{$data['id']}") ?>">
                        <div class="weekly2-img">
                          <img src="<?= AmbilGaleri($data['gambar'], 'kecil') ?>" alt="<?= $data['nama'] ?>">
                        </div>
                        <div class="weekly2-caption">
                          <h4><a href="<?= site_url("first/sub_gallery/{$data['id']}") ?>"><?= strtoupper($data['nama']) ?></a></h4>
                        </div>
                      </a>
                    </div>
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