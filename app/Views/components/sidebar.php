<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url() ?>">
        <i class="bi bi-grid"></i>
        <span>Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('produk') ?>">
        <i class="bi bi-box"></i>
        <span>Produk</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('keranjang') ?>">
        <i class="bi bi-cart"></i>
        <span>Keranjang</span>
      </a>
    </li>

    <li class="nav-item">
  <a class="nav-link <?= (uri_string() == 'profile') ? '' : 'collapsed' ?>" href="/profile">
    <i class="bi bi-person"></i>
    <span>Profile</span>
  </a>
</li>

  </ul>

</aside>