<!DOCTYPE html>
<html lang="en">
<?php $this->load->view($folder_themes . '/commons/head') ?>

<body>
  <?php //$this->load->view($folder_themes . '/commons/spinner.php') 
  ?>
  <?php $this->load->view($folder_themes . '/commons/header.php') ?>

  <?php $this->load->view($folder_themes . '/partials/gallery/sub_gallery') ?>

  <?php $this->load->view($folder_themes . '/commons/footer') ?>

</body>

</html>