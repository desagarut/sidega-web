<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="header-top black-bg d-sm-block">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-6 col-xs-12">
                <div class="text-left header-info-left">
                    <small><?php $this->load->view($folder_themes . '/widgets/running_text') ?></small>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="text-right header-info-right d-none d-sm-block">
                    <ul class="header-date">
                        <li><span class="flaticon-calendar"></span> <?= $desa['email_website']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>