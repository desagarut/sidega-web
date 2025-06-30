<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<head>
    <meta charset="utf-8">
    <!--<title>eLEARNING - eLearning HTML Template</title>-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Desa Garut" name="keywords">
    <meta content="Informasi Seputar Desa Di Kabupaten Garut Provinsi Jawa Barat" name="description">

    <?php defined('THEME_VERSION') or define('THEME_VERSION', 'V4.7') ?>

    <?php $website_title = trim(ucwords($this->setting->website_title)); ?>

    <meta content="utf-8" http-equiv="encoding">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <meta name='google' content='notranslate' />
    <meta name='theme' content='Website ' />
    <meta name='designer' content='Bambang Andri H' />
    <meta name='theme:designer' content='Bambang Andri H' />
    <meta name="theme:version" content="<?= THEME_VERSION ?>" />
    <meta name="theme-color" content="#2e8b17" />
    <meta name="keywords" content="sidega, SIDEGA, SIDeGa, sistem informasi desa garut, web, blog, informasi, website, tema sidega-blue, desa garut, kelurahan garut, kecamatan garut, kabupaten garut, Jawa Barat, indonesia" />
    <meta property="og:site_name" content="<?= $website_title ?>" />
    <meta property="og:type" content="article" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <?php if (isset($single_artikel)) : ?>

        <title><?= $single_artikel["judul"] . " - $website_title" ?></title>

        <meta name='description' content="<?= str_replace('"', "'", substr(strip_tags($single_artikel['isi']), 0, 400)); ?>" />
        <meta property="og:title" content="<?= $single_artikel["judul"]; ?>" />
        <?php if (trim($single_artikel['gambar']) != '') : ?>
            <meta property="og:image" content="<?= base_url() ?><?= LOKASI_FOTO_ARTIKEL ?>sedang_<?= $single_artikel['gambar']; ?>" />
        <?php endif; ?>
        <meta property='og:description' content="<?= str_replace('"', "'", substr(strip_tags($single_artikel['isi']), 0, 400)); ?>" />

    <?php else : ?>
        <title><?php $tmp = ltrim(get_dynamic_title_page_from_path(), ' -');
                echo (trim($tmp) == '') ? $website_title : "$tmp - $website_title"; ?></title>
        <meta name='description' content="<?= $this->setting->website_title . ' ' . $website_title; ?>" />
        <meta property="og:title" content="<?= $website_title; ?>" />
        <meta property='og:description' content="<?= $this->setting->website_title . ' ' . $website_title; ?>" />
    <?php endif; ?>

    <meta property='og:url' content="<?= current_url(); ?>" />
    <?php if (is_file(LOKASI_LOGO_INSTANSI . "favicon.ico")) : ?>
        <link rel="shortcut icon" href="<?= base_url() . LOKASI_LOGO_INSTANSI ?>favicon.ico" />
    <?php else : ?>
        <link rel="shortcut icon" href="<?= base_url('favicon.ico') ?>" />
    <?php endif; ?>
    <script>
        const BASE_URL = '<?= base_url() ?>';
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1823410826720847" crossorigin="anonymous"></script>

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/owl.carousel.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/ticker-style.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/flaticon.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/slicknav.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/animate.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/magnific-popup.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/fontawesome-all.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/themify-icons.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/slick.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/nice-select.css") ?>">
    <link rel="stylesheet" href="<?= base_url("$this->theme_folder/$this->theme/assets/css/style.css") ?>">
</head>