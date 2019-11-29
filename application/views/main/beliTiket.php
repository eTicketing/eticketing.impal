<!DOCTYPE html>
<!-- saved from url=(0057)https://getbootstrap.com/docs/4.3/examples/sticky-footer/ -->
<html lang="en" class="h-100">
    <head>
        <?php $this->load->view("main/_partials/head.php") ?>
    </head>
    <body class="d-flex flex-column h-100 bg">
        <?php $this->load->view("main/_partials/navbar.php") ?>
        <div class="container">
            <div class="info-pembelian mx-auto">
                <div class="card text-center">
                    <div class="card-header">
                        <img src="<?php echo base_url('upload/acara/'.$acara->gambar) ?>" class="img-fluid" width="100%" height="100%">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Detail Tiket</h5>
                        <ul class="list-unstyled">
                            <li>Nama Acara : <?php echo $acara->nama_acara ?></li>
                            <li>Harga : Rp <?php echo $acara->harga ?>,-</li>
                            <li>Tempat : <?php echo $acara->tempat ?></li>
                            <li>Tanggal : <?php echo $acara->tanggal ?></li>
                            <li><p class="card-text"><?php echo $acara->deskripsi ?></p></li>
                        </ul>
                        <h5 class="card-title">Form Pembelian</h5>
                        <form action="<?php base_url('main/tiket/add') ?>" method="post" enctype="multipart/form-data" class="form-signin">
                            <div class="form-group">
                                <input type="hidden" name="id_acara" value="<?php echo $acara->id_acara?>" />
                                <input type="hidden" name="id_customer" value="<?php echo $this->session->userdata('id')?>" />
                                <input type="hidden" name="qr_code" value="default.jpg" />
                                <input type="number" id="valSatu" class="form-control" placeholder="Jumlah Tiket" required="" name="jumlah">
                                <input type="hidden" id="valDua" name="harga" value="<?php echo $acara->harga?>" />
                                <input type="hidden" id="hasilnya" name="total_harga" />
                                <input type="hidden" name="status" value="Belum Terverifikasi" />
                            </div>
                            <a href="#!" onclick="beliConfirm('<?php echo site_url('main/tiket/pesanan/'.$this->session->userdata('id')) ?>')">
                                <button class="btn draw-border2">Beli Tiket</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
        </footer>
        <?php $this->load->view("main/_partials/modal.php") ?>
        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>