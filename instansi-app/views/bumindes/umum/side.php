<?php if ($this->CI->cek_hak_akses('u')): ?>
<!--
<style type="text/css">
  .mini-submenu{
    display:none;
    background-color: rgba(0, 0, 0, 0);
    border: 1px solid rgba(0, 0, 0, 0.9);
    border-radius: 4px;
    padding: 9px;
    /*position: relative;*/
    width: 42px;
    cursor: pointer;
  }

  #slide-submenu{
    display: inline-block;
    padding: 2px;
    border-radius: 4px;
    cursor: pointer;
  }
</style>

<button class="mini-submenu">
  <i class="fa fa-bars"></i>
</button>


<div class="list-group">
  <div class="card-footer no-padding col-sm-11">
    
    <ul class="nav nav-stacked">
      <li class="<?php compared_return($selected_nav, "peraturan", "active"); ?>"><a href="<?= site_url('dokumen_sekretariat/clear/3') ?>">Buku Peraturan Desa</a></li>
      <li class="<?php compared_return($selected_nav, "keputusan", "active"); ?>"><a href="<?= site_url('dokumen_sekretariat/clear/2') ?>">Buku Keputusan Kepala Desa</a></li>
      <li class="<?php compared_return($selected_nav, "aparat", "active"); ?>"><a href="<?= site_url('pengurus') ?>">Buku Aparat Pemerintah Desa</a></li>
      <li class="<?php compared_return($selected_nav, "agenda_masuk", "active"); ?>"><a href="<?= site_url('surat_masuk') ?>">Buku Agenda - Surat Masuk</a></li>
      <li class="<?php compared_return($selected_nav, "agenda_keluar", "active"); ?>"><a href="<?= site_url('surat_keluar') ?>">Buku Agenda - Surat Keluar</a></li>
      <li class="<?php compared_return($selected_nav, "ekspedisi", "active"); ?>"><a href="<?= site_url('ekspedisi/clear') ?>">Buku Ekspedisi</a></li>
      <li class="<?php compared_return($selected_nav, "lembaran", "active"); ?>"><a href="<?= site_url('buku_umum/lembaran_desa/clear') ?>">Buku Lembaran Desa dan Berita Desa</a></li>
      <li class="<?php compared_return($selected_nav, "agenda", "active"); ?>"><a href="<?= site_url('web/tab/1000') ?>">Agenda Desa</a></li>
    </ul>
    
  </div>
  <button class="hide-menu col-sm-1" id="slide-submenu">
    <i class="fa fa-bars"></i>
  </button>
</div>


<script type="text/javascript">
  $(function(){

    $('#slide-submenu').on('click',function() {
      $(this).closest('.list-group').fadeOut('slow',function(){
        $('.mini-submenu').fadeIn();
      });
      $('#umum-sidebar').removeClass("col-sm-3");
      $('#umum-sidebar').addClass("col-sm-1");
      $('#umum-content').removeClass("col-sm-9");
      $('#umum-content').addClass("col-sm-11");
    });

    $('.mini-submenu').on('click',function(){
      $(this).next('.list-group').fadeIn('slow');
      $('.mini-submenu').hide();
      $('#umum-sidebar').removeClass("col-sm-1");
      $('#umum-sidebar').addClass("col-sm-3");
      $('#umum-content').removeClass("col-sm-11");
      $('#umum-content').addClass("col-sm-9");
    })
  })
</script>-->
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Menu</h3>
		<div class="card-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="card-body">
		<ul class="nav nav-pills nav-stacked">
      <li class="<?php compared_return($selected_nav, "peraturan", "active"); ?>"><a href="<?= site_url('dokumen_sekretariat/clear/3') ?>">Buku Peraturan</a></li>
      <li class="<?php compared_return($selected_nav, "keputusan", "active"); ?>"><a href="<?= site_url('dokumen_sekretariat/clear/2') ?>">Buku Keputusan</a></li>
      <li class="<?php compared_return($selected_nav, "aparat", "active"); ?>"><a href="<?= site_url('pengurus') ?>">Buku Pegawai</a></li>
      <li class="<?php compared_return($selected_nav, "agenda_masuk", "active"); ?>"><a href="<?= site_url('surat_masuk') ?>">Buku Agenda - Surat Masuk</a></li>
      <li class="<?php compared_return($selected_nav, "agenda_keluar", "active"); ?>"><a href="<?= site_url('surat_keluar') ?>">Buku Agenda - Surat Keluar</a></li>
      <li class="<?php compared_return($selected_nav, "ekspedisi", "active"); ?>"><a href="<?= site_url('ekspedisi/clear') ?>">Buku Ekspedisi</a></li>
      <!--<li class="<?php compared_return($selected_nav, "lembaran", "active"); ?>"><a href="<?= site_url('buku_umum/lembaran_desa/clear') ?>">Buku Lembaran Desa dan Berita Desa</a></li>-->
      <li class="<?php compared_return($selected_nav, "agenda", "active"); ?>"><a href="<?= site_url('web/tab/1000') ?>">Agenda Kampus</a></li>
        </ul>
	</div>
</div>


<?php endif; ?>
