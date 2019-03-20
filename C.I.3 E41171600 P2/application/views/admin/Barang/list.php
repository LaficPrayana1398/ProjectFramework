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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Barang/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Deskripsi</th>
										<th>Harga</th>
										<th>Stok</th>
										<th>Suplier</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($barang as $barang): ?>
									<tr>
										<td width="150">
											<?php echo $Barang->NamaBarang ?>
										</td>
										<td>
											<?php echo $Barang->HargaBarang ?>
										</td>
										<td class="small">
											<?php echo substr($barang->DeskripsiBarang, 0, 120) ?>...</td>
										<td width="250">
											<a href="<?php echo site_url('admin/Barang/edit/'.$barang->KodeBarang) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/Barang/delete/'.$barang->KodeBarang) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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