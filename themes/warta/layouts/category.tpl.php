<!DOCTYPE html>
<html lang="en">
<?php $this->load->view($folder_themes . '/commons/head') ?>

<body>
    <?php $this->load->view($folder_themes . '/commons/header.php') ?>
    <main>
    <?php $this->load->view($folder_themes . '/partials/categories.php') ?>
    </main>
<?php $this->load->view($folder_themes . '/commons/footer') ?>

</body>

</html>