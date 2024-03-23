<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="header-mid white-bg  d-none d-md-block">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- Logo -->
            <div class="col-xl-6 col-lg-6 col-md-3">
                <div class="logo">
                    <h1 style="color: dark; font-family:'Segoe UI', Tahoma"><a href="<?= site_url('first') ?>"><img src="<?= logo_web($desa['logo']) ?>" style="width:38px; height:38px" alt="<?= $this->setting->website_title ?>">&nbsp;<?= $this->setting->website_title ?></a></h1>
                </div>
            </div>
            <!--<div class="col-xl-9 col-lg-9 col-md-9">
                <?php $this->load->view($folder_themes . '/widgets/header-banner') ?>
            </div>-->
        </div>
    </div>
</div>