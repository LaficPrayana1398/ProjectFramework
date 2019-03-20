<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/partial/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/partial/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/partial/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Barang/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/Barang/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="NamaBarang" placeholder="Nama Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('NamaBarang') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="name">Deskripsi*</label>
								<textarea class="form-control <?php echo form_error('DeskripsiBarang') ? 'is-invalid':'' ?>"
								 name="DeskripsiBarang" placeholder="Deskripsi Barang..."></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('DeskripsiBarang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Harga">Harga</label>
								<input class="form-control <?php echo form_error('HargaBarang') ? 'is-invalid':'' ?>"
								 type="number" name="HargaBarang" min="0" placeholder="Harga Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('HargaBarang') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="stok">Stok</label>
								<input class="form-control <?php echo form_error('StockBarang') ? 'is-invalid':'' ?>"
								 type="number" name="StockBarang" min="0" placeholder="Harga Barang" />
								<div class="invalid-feedback">
									<?php echo form_error('StockBarang') ?>
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
				<?php $this->load->view("admin/partial/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		

</body>

</html>