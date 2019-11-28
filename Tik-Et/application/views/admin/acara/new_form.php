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

						<form action="<?php base_url('admin/acara/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="Nama Acara">Nama Acara*</label>
								<input class="form-control <?php echo form_error('nama_acara') ? 'is-invalid':'' ?>"
								 type="text" name="nama_acara" placeholder="Nama acara" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_acara') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Tempat">Tempat*</label>
								<input class="form-control <?php echo form_error('tempat') ? 'is-invalid':'' ?>"
								 type="text" name="tempat" min="0" placeholder="Tempat acara" />
								<div class="invalid-feedback">
									<?php echo form_error('tempat') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="Tanggal">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="date" name="tanggal" min="0" placeholder="" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Gambar/Poster</label>
								<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Deskripsi">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('deksripsi') ? 'is-invalid':'' ?>"
								 name="deskripsi" placeholder="Deskripsi..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="Harga">Harga*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="number" name="harga" min="0" placeholder="Harga tiket acara" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="Jumlah">Jumlah*</label>
								<input class="form-control <?php echo form_error('jumlah') ? 'is-invalid':'' ?>"
								 type="number" name="jumlah" min="0" placeholder="Jumlah tiket yang tersedia" />
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