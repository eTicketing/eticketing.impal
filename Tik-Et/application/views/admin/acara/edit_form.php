<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/acara/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/acara/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_acara" value="<?php echo $acara->id_acara?>" />
                            <input type="hidden" name="id_admin" value="<?php echo $acara->id_admin?>" />
							<div class="form-group">
								<label for="Nama Acara">Nama Acara*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nama_acara" placeholder="Nama acara" value="<?php echo $acara->nama_acara ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_acara') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="Tempat">Tempat Acara*</label>
								<input class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>"
								 type="text" name="tempat" placeholder="Tempat acara" value="<?php echo $acara->tempat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="Tanggal">Tanggal Acara*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" placeholder="Tanggal acara" value="<?php echo $acara->tanggal ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Gambar">Gambar/Poster</label>
								<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<input type="hidden" name="old_image" value="<?php echo $acara->gambar ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="deskripsi">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>"
								 name="deskripsi" placeholder="Deskripsi acara"><?php echo $acara->deskripsi ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="Harga">Harga Tiket*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="number" name="harga" placeholder="Harga tiket" value="<?php echo $acara->harga ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="Jumlah">Jumlah Tiket*</label>
								<input class="form-control <?php echo form_error('jumlah') ? 'is-invalid':'' ?>"
								 type="number" name="jumlah" placeholder="Jumlah tiket yang tersedia" value="<?php echo $acara->jumlah ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jumlah') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

        <?php $this->load->view("admin/_partials/modal.php") ?>

</body>

</html>