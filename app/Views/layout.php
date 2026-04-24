<?php
$hlm = "Home";
if(uri_string() != ""){
  $hlm = ucwords(uri_string());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= $hlm ?> - Toko</title>

  <!-- CSS -->
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <?= $this->include('components/header') ?>
  <?= $this->include('components/sidebar') ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $hlm ?></h1>
    </div>

    <section class="section">
      <?= $this->renderSection('content') ?>
    </section>

  </main>

  <?= $this->include('components/footer') ?>

  <!-- JS -->
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url()?>NiceAdmin/assets/js/main.js"></script>

</body>
</html>