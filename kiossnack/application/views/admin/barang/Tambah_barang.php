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

				<?php $this->load->view("admin/partial/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/barang/daftar_barang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/barang/tambah_aksi') ?>" method="post" enctype="multipart/form" >
						<div class="form-group">
								<label for="kode">Kode barang</label>
								<input class="form-control"
								 type="text" name="KodeBarang" placeholder="Kode Barang" />
							</div>
							<div class="form-group">
								<label for="name">Nama barang</label>
								<input class="form-control "
								 type="text" name="NamaBarang" placeholder="Nama Barang" />
							</div>

                            <div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea class="form-control "
								 name="DeskripsiBarang" placeholder="Deskripsi Barang..."></textarea>
								</div>

							<div class="form-group">
								<label for="Harga">Harga</label>
								<input class="form-control"
								 type="number" name="HargaBarang" min="0" placeholder="Harga Barang" />
								</div>

                            <div class="form-group">
								<label for="stok">Stok</label>
								<input class="form-control"
								 type="number" name="StockBarang" min="0" placeholder="Harga Barang" />
								</div>
							
							<div class="form-group">
								<label for="suplier">Suplier</label>
								<input class="form-control"
								 type="text" name="kodesuplier" min="0" placeholder="Suplier" />
								</div>

							<input type="submit" value="Tambah" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

		

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		

</body>

</html>