 <nav class="navbar fixed-top navbar-expand">
    <div class="mx-auto">
        <ul class="navbar-nav">
            <li class="nav-item">
                <button class="btn draw-border logo" style="font-size: x-large" onclick="window.location.href = '<?php echo site_url('main') ?>'">Tik-Et.</button>
            </li>
        </ul>
    </div>
    <div class="mx-auto">
        <ul class="navbar-nav">
            <?php if ($this->session->userdata('username')==null) : ?>
                <li class="nav-item">
                    <button class="btn draw-border" onclick="window.location.href = '<?php echo site_url('user/user/registrasi') ?>'">Daftar</button>
                </li>
                <li class="nav-item">
                    <button class="btn draw-border" onclick="window.location.href = '<?php echo site_url('main/main/login') ?>'">Masuk</button>
                </li>
            <?php elseif ($this->session->userdata('username')!=null) : ?>
                <li class="nav-item">
                    <button class="btn draw-border" onclick="window.location.href = '<?php echo site_url('main/tiket/pesanan/'.$this->session->userdata('id')) ?>'">Pesanan dan Tiket</button>
                </li>
                <li class="nav-item">
                    <a href="#!" onclick="logoutConfirm('<?php echo site_url('main/main/logout') ?>')">
                        <button class="btn draw-border">Logout</button>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>