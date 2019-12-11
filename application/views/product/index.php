<!-- Page Wrapper -->
<div id="wrapper">


	<?= $sidebar; ?>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<?= $topbar; ?>

			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Page Heading -->
				<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

				<a href="#" class="btn btn-primary btn-sm mb-4">
					Input New Product
				</a>


				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover" id="productTable" width="100%"
								cellspacing="0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama</th>
										<th>Stok</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $i = 0;
									foreach ($product as $p) : ?>
									<tr>
										<td><?= ++$i; ?></td>
										<td><?= $p['nama']; ?></td>
										<td><?= $p['stok']; ?></td>
										<td>
											<a href="#" class="btn btn-sm btn-info">Detail</a>
											<a href="#" class="btn btn-sm btn-warning">Edit</a>
											<a href="#" class="btn btn-sm btn-danger">Delete</a>
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

		</div>
		<!-- End of Main Content -->

		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Your Website 2019</span>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
