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
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>QR Code</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0?>
                        <?php foreach ($tiket as $dataTiket): ?>
                        <tr>
                            <?php $i++?>
                            <td>
                                <a href="<?php echo site_url('main/tiket/detail_tiket/'.$dataTiket->id_tiket) ?>">
                                <button class="btn draw-border"><?php echo $i ?></button></a>
                            </td>
                            <td>
                                <img src="<?php echo base_url('upload/tiket/qr_code/'.$dataTiket->qr_code) ?>" width="64" />
                            </td>
                            <td>
                                <?php echo $dataTiket->jumlah ?>
                            </td>
                            <td>
                                <?php echo $dataTiket->total_harga ?>
                            </td>
                            <td>
                                <?php echo $dataTiket->status ?>
                            </td>
                            <td width="250">
                                <a href="<?php echo site_url('main/tiket/edit/'.$dataTiket->id_acara) ?>">
                                    <button class="btn draw-border2">Unggah Bukti Bayar</button>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php $this->load->view("main/_partials/footer.php") ?>
        <?php $this->load->view("main/_partials/modal.php") ?>

        <?php $this->load->view("admin/_partials/js.php") ?>
    </body>
</html>