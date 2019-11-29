<!DOCTYPE html>
<!-- saved from url=(0057)https://getbootstrap.com/docs/4.3/examples/sticky-footer/ -->
<html lang="en" class="h-100">
    <head>
        <?php $this->load->view("main/_partials/head.php") ?>
    </head>
    <body class="d-flex flex-column h-100">
        <?php $this->load->view("main/_partials/navbar.php") ?>
        <img src="<?php echo base_url('img/ticket2.png') ?>" class="img-fluid" width="100%" height="100%"><br><br><br>
        <div class="container2 mx-auto">
            <div class="card-group">
                <?php foreach ($acara as $dataAcara): ?>
                <div class="card">
                    <img src="<?php echo base_url('upload/acara/'.$dataAcara->gambar) ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $dataAcara->nama_acara ?></h5>
                    <p class="card-text"><small class="text-muted">Tanggal : <?php echo $dataAcara->tanggal ?></small></p>
                    <p class="card-text"><?php echo $dataAcara->deskripsi ?></p>
                    <button class="learn-more">
                        <div class="circle">
                            <span class="icon arrow"></span>
                        </div>
                        <p class="button-text" onclick="window.location.href = '<?php echo site_url('main/tiket/add/'.$dataAcara->id_acara) ?>'">Detail Acara</p>
                    </button><br><br>
                    <p class="card-text"><small class="text-muted">Tiket tersedia : <?php echo $dataAcara->jumlah ?></small></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php $this->load->view("main/_partials/footer.php") ?>
        <?php $this->load->view("main/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>