<!-- ======= Gallery CCTV ======= -->
<div class="weekly2-news-area pt-40 pb-40">
  <div class="container">
    <div class="weekly2-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="slider-wrapper">
            <div class="row justify-content-between align-items-end mb-15">
              <div class="col-xl-4">
                <div class="section-tittle mb-30">
                  <h5>CCTV Publik</h5>
                </div>
              </div>
            </div>
            <div class="row g-4">
              <?php if ($cctv) : ?>
                <?php foreach ($cctv as $data) : ?>
                  <?php if ($data['link']) : ?>
                    <div class="col-md-4">
                      <div class="team-item bg-light">
                        <iframe width="100%" height="200" src="<?= $data["link"]; ?>" frameborder="0" allowfullscreen></iframe>
                        <div class="text-center p-3">
                          <h6 class="mb-0"><a href="<?= site_url("first/cctv_sub/{$data['id']}") ?>"><?= strtoupper($data['nama']) ?></a></h6>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>
              <?php else : ?>
                <div class="error-area">
                  <div class="d-table">
                    <div class="d-table-cell">
                      <div class="container">
                        <div class="error-content">
                          <h1 style="color:brown">404</h1>
                          <h2>Oops! CCTV Tidak Ada!</h2>
                          <p>Halaman yang dituju tidak ada, mungkin sudah dihapus atau dialihkan</p>
                          <div class="button">
                            <a class="btn btn-warning py-3 px-5 mt-2" style="border-radius: 30px 0 0 30px;" href="<?= site_url('') ?>">Back to Home</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>