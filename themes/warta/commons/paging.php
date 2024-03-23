<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$pages = array();
for ($i = $paging->start_link; $i <= $paging->end_link; $i++) {
	array_push($pages, $i);
}
?>

<div class="container">
	<nav class="navbar navbar-expand-lg sticky-top">
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
				<?php if ((int) $paging->end_link > 1) : ?>
					<div class="navbar-nav">
						<?php if ($paging->start_link) : ?>
							<a href="<?= site_url('first/' . $paging_page . '/' . $paging->start_link) ?>" class="disabled text-dark" style="padding:10px 10px 10px 10px"><i class="fa fa-arrow-left"></i></a>
						<?php endif ?>
						<?php if ($paging->prev) : ?>
							<a href="<?= site_url('first/' . $paging_page . '/' . $paging->prev . $paging->suffix) ?>" class="disabled"></a>
						<?php endif ?>
						<?php foreach ($pages as $page) : ?>
							<div class="mb-1">
								<a href="<?= site_url('first/' . $paging_page . '/' . $page . $paging->suffix) ?>" class="active btn btn-sm btn-box btn-default mr-1"><?= $page ?></a>
							</div>
						<?php endforeach ?>
						<?php if ($paging->next) : ?>
							<a href="<?= site_url('first/' . $paging_page . '/' . $paging->next . $paging->suffix) ?>" class="disabled"></a>
						<?php endif ?>
						<?php if ($paging->end_link) : ?>
							<a href="<?= site_url('first/' . $paging_page . '/' . $paging->end_link) ?>" class="disabled text-dark"  style="padding:10px 10px 10px 10px"><i class="fa fa-arrow-right"></i></a>
						<?php endif ?>
					</div>
				<?php endif ?>
			</div>
		</div>
	</nav>
</div>