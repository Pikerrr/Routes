<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<section class="section">
    <div class="card">
      <div class="card-body">

        <h5 class="card-title">User Profile</h5>

        <p><b>Username:</b> <?= session()->get('username') ?></p>
        <p><b>Role:</b> <?= session()->get('role') ?></p>
        <p><b>Email:</b> <?= session()->get('email') ?></p>
        <p><b>Waktu Login:</b> <?= session()->get('login_time') ?></p>
        <p><b>Status Login:</b> 
          <?= session()->get('isLoggedIn') ? 'Logged In' : 'Not Logged In' ?>
        </p>

      </div>
    </div>
  </section>

<?= $this->endSection() ?>