<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<?php $this->load->view($folder_themes . '/commons/head') ?>

<body>
  <?php $this->load->view($folder_themes . '/commons/header.php') ?>
  <div class="container py-5">
    <div class="row">
      <div class="col-md-9">
        <?php $this->load->view($folder_themes . '/partials/gallery/cctv_sub') ?>
      </div>
      <div class="col-md-3 entries">
        <div class="sidebar blog-grid-page">
          <?php $this->load->view($folder_themes . '/partials/gallery/sidebar_cctv.php') ?>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view($folder_themes . '/commons/footer') ?>
</body>

</html>