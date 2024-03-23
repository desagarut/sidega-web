<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="header-mid white-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- Logo -->
            <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                <div class="logo">
                    <h1 style="color: dark; font-family:'Segoe UI', Tahoma"><a href="<?= site_url('first') ?>"><img src="<?= logo_web($desa['logo']) ?>" style="width:38px; height:38px" alt="<?= $this->setting->website_title ?>">&nbsp;<?= $this->setting->website_title ?></a></h1>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                <?php $this->load->view($folder_themes . '/widgets/header-banner') ?>
            </div>
        </div>
    </div>
</div>