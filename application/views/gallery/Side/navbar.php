<header class="navbar navbar-expand-md bg-transparent d-print-none" style="min-height: auto;">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="<?= base_url('dist/img/logo/pixel2.png') ?>" alt="Logo" width="85" height="85">
        <div class="nav-item dropdown order-md-last text-white">
            <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="false">
                <span class="avatar avatar-sm" style="box-shadow: none;background-image: url(<?= base_url('dist/img/gambar/azuki.jpg') ?>)"></span>
                <div class="d-none d-xl-block ps-2">
                    <div><?= $this->session->userdata('Username') ?></div>
                    <div class="mt-1 small text-color:#FF46A4 navbar-brand-autodark ">Developer</div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <a href="<?= base_url('Home/profile') ?>" class="dropdown-item">Profile</a>
                <a href="<?= base_url('Auth/loginAkun') ?>" class="dropdown-item">Logout</a>
            </div>
        </div>

        <div class="collapse navbar-collapse justify-content-center text-white" id="navbar-menu">
            <ul class="navbar-nav">
                <li class="nav-item <?= ($this->uri->segment(2) == 'index') ? 'active' : ''; ?>"> <a href="<?= base_url('Home/index') ?>" class="nav-link" style="color:#FF46A4">BERANDA</a></li>
                <li class="nav-item <?= ($this->uri->segment(2) == 'album') ? 'active' : ''; ?>"><a href="<?= base_url('Home/album') ?>" class="nav-link" style="color:#FF46A4">ALBUM</a></li>
                <li class="nav-item <?= ($this->uri->segment(2) == 'users') ? 'active' : ''; ?>"><a href="<?= base_url('Home/users') ?>" class="nav-link" style="color:#FF46A4">USER</a></li>
            </ul>


        </div>
    </div>
</header>