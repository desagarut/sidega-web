<!-- ======= Gallery Youtube ======= -->
<div class="container py-5">
  <div class="text-center">
    <h4 class="mb-5 text-left">Channel TV <?= $live_tv["nama"]; ?> | <a href="<?= site_url("first/live_tv"); ?>" style="color:green"> Negara </a>
<!-- <a href="<?= site_url("first/gallery_youtube/{$data['id']}") ?>" class="flex-shrink-0 btn btn-sm btn-danger px-3" style="border-radius: 8px 8px 8px 8px;">YOUTUBE</a> |
      <a href="<?= site_url("first/cctv/{$data['id']}") ?>" class="flex-shrink-0 btn btn-sm btn-warning px-3" style="border-radius: 8px 8px 8px 8px;">CCTV</a> |
      <a href="<?= site_url("first/gallery/{$data['id']}") ?>" class="flex-shrink-0 btn btn-sm btn-light px-3" style="border-radius: 8px 8px 8px 8px;">FOTO</a>
-->
    </h4>
  </div>
  <div class="row g-4">

    <?php if ($channel) : ?>
      <?php foreach ($channel as $data) : ?>
        <?php if ($data['link']) : ?>
          <div class="col-md-4 shadow" style="padding: 10px 10px 10px 10px;">
            <!-- Start Single Product -->
            <div class="single-product">
              <div class="product-image">
                <iframe height="200px" width="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $data["link"]; ?>" title="<?= $data['nama'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="product-info">
                <h4 class="title"><small><?= $data["nama"] ?></small></h4>
                <p><?= $data["deskripsi"] ?></p>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    <?php else : ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>404</h1>
            <h2>Oops! Tidak Ada Data!</h2>
            <p>Halaman yang dituju tidak ada, mungkin sudah dihapus atau dialihkan</p>
            <div class="button text-end">
              <a class="btn btn-warning py-3 px-5 mt-2" style="border-radius: 30px 0 0 30px;" href="<?= site_url('') ?>">Back to Home</a>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>