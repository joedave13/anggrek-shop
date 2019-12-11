<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider mb-3">

	<!-- Heading -->
	<div class="sidebar-heading">
		Dashboard
	</div>

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/dashboard/index'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Data
	</div>

	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/customer/index'); ?>">
			<i class="fas fa-fw fa-users"></i>
			<span>Data Customer</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/product/index'); ?>">
			<i class="fas fa-fw fa-fan"></i>
			<span>Data Produk</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/penjualan/index'); ?>">
			<i class="fas fa-fw fa-shopping-cart"></i>
			<span>Data Penjualan</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->