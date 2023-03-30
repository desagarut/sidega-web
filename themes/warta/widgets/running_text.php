<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($teks_berjalan) : ?>

  <?php foreach ($teks_berjalan as $teks) : ?>
    <a href="<?= $teks['tautan'] ?>" title="Baca Selengkapnya">
      <marquee onmouseover="this.stop()" onmouseout="this.start()">
        <?= $teks['teks'] ?>
        <?php if ($teks['tautan']) : ?>
          <?= $teks['judul_tautan'] ?>
        <?php endif; ?>
      </marquee>
    </a>
  <?php endforeach; ?>
<?php endif; ?>