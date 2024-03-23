<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php if ($teks_berjalan) : ?>
 
    <marquee onmouseover="this.stop()" onmouseout="this.start()">
      <?php foreach ($teks_berjalan as $teks) : ?>
        <a href="<?= $teks['tautan'] ?>" target="_blank">
          <span class="title">
            <?= $teks['teks'] ?>
            <?php if ($teks['tautan']) : ?>
              <?= $teks['judul_tautan'] ?>
            <?php endif; ?>
          </span>
        </a>&nbsp;|&nbsp;
      <?php endforeach; ?>
    </marquee>
<?php endif; ?>