<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Acara</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">Tambah Acara</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">List Acara</a>
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Pesanan Tiket</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">Tampilkan Semua</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products/add') ?>">Belum Terverifikasi</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Perlu Diverifikasi</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Telah Diverifikasi</a>
            <a class="dropdown-item" href="<?php echo site_url('admin/products') ?>">Ditolak</a>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-qrcode"></i>
            <span>QR Code Scanner</span></a>
    </li>
</ul>