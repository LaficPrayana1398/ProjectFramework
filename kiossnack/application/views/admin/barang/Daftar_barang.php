<!DOCTYPE html>
<html lang="en">

<head>

<?php 
$this->load->view('admin/partial/head');
?>

</head>

<body id="page-top">

  <?php
    $this->load->View('admin/partial/navbar');
  ?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      $this->load->View('admin/partial/sidebar');
    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php
          $this->load->View('admin/partial/breadcrumb');
        ?>

      <!-- /.konten -->
      <!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
            <a href="<?php echo site_url('admin/Barang/Tambah_barang') ?>"><i class="fas fa-plus"></i> Tambah Barang</a>
            
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										  <th>No</th>
										  <th>Kode Barang</th>
										  <th>Nama Barang</th>
										  <th>Deskripsi Barang</th>
										  <th>Harga Barang</th>
                      <th>Stock Barang</th>
                      <th>Tindakan</th>
                  </tr>
								</thead>
								<tbody>
                <?php foreach ($barang as $ambildata): ?>
                      <tr>
                      <th></th>
										  <td><?php echo $ambildata->KodeBarang ?></td>
										  <td><?php echo $ambildata->NamaBarang ?></td>
										  <td><?php echo $ambildata->DeskripsiBarang?></td>
										  <td><?php echo $ambildata->HargaBarang?></td>
                      <td><?php echo $ambildata->StockBarang?></td>
                      <td>
                        <a href=""class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											  <a href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

 <!-- Bootstrap core JavaScript-->
 <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
	<!-- Page level plugin JavaScript-->
	<script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
	<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>
	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>
	<!-- Demo scripts for this page-->
	<script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
	<script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>

</body>

</html>
