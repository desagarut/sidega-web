<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<?php $this->load->view($folder_themes . '/commons/head') ?>

<body>
  <?php $this->load->view($folder_themes . '/commons/header.php') ?>
  <?php $this->load->view($folder_themes . '/partials/live_tv/channel_tv') ?>
  <?php $this->load->view($folder_themes . '/commons/footer') ?>
</body>

</html>