<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>


<!-- List Konten -->
<?php $title = (!empty($judul_kategori)) ? $judul_kategori['kategori'] : "Artikel Terkini"; ?>

<?php if ($headline) : ?>
    <?php $this->load->view($folder_themes . '/partials/carousel'); ?>
    <?php $this->load->view($folder_themes . '/partials/whatnew'); ?>
<?php endif; ?>
<?php $this->load->view($folder_themes . '/partials/artikel-front-list'); ?>
<?php $this->load->view($folder_themes . '/partials/gallery/cctv_front'); ?>
<?php $this->load->view($folder_themes . '/partials/gallery/youtube'); ?>
<?php $this->load->view($folder_themes . '/partials/gallery/gallery_front'); ?>
<?php $this->load->view($folder_themes . '/partials/weekly'); ?>
<?php $this->load->view($folder_themes . '/widgets/banner-one'); ?>
<?php $this->load->view($folder_themes . '/partials/partner'); ?>