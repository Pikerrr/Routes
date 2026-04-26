<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>

  <!-- Favicons -->
  <link href="<?= base_url()?>NiceAdmin/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url()?>NiceAdmin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS -->
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url()?>NiceAdmin/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
          <div class="col-lg-4 col-md-6">

            <div class="d-flex justify-content-center py-4">
              <img src="<?= base_url()?>NiceAdmin/assets/img/logo.png" width="50">
            </div>

            <div class="card">
              <div class="card-body">

                <div class="pt-4 pb-2 text-center">
                  <h5 class="card-title">Login</h5>
                  <p class="small">Masukkan username & password</p>
                </div>

                <!-- 🔥 ERROR MESSAGE -->
                <?php if(session()->getFlashdata('error')): ?>
                  <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                  </div>
                <?php endif; ?>

                <!-- 🔥 FORM LOGIN (SUDAH FIX) -->
                <form action="<?= base_url('login/process') ?>" method="post">

                  <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                  </div>

                  <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                  </div>

                  <button class="btn btn-primary w-100">Login</button>

                </form>

              </div>
            </div>

          </div>
        </div>
      </section>

    </div>
  </main>

  <!-- JS -->
  <script src="<?= base_url()?>NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>