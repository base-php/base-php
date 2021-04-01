<!DOCTYPE html>
<html lang="en">
<head>

<!-- Metadata -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('img/app/favicon.png" ') }}">

<title>Base</title>

<!-- Custom fonts for this template-->
<link rel="stylesheet" href="{{ node('@fortawesome/fontawesome-free/css/all.css') }}">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Datatables -->
<link rel="stylesheet" href="{{ node('datatables.net-bs4/css/dataTables.bootstrap4.css') }}">

<!-- SweetAlert -->
<link rel="stylesheet" href="{{ node('sweetalert2/dist/sweetalert2.css') }}">

<!-- Custom styles for this template-->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
				<div class="sidebar-brand-icon rotate-n-15">
					<!-- Logo here -->
				</div>
				<div class="sidebar-brand-text mx-3">Base</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item {{ active('/') }}">
				<a class="nav-link menu" href="/">
					<i class="fas fa-tachometer-alt"></i>
					<span>Inicio</span>
				</a>
			</li>

			<li class="nav-item {{ active('users') }}">
				<a class="nav-link menu" href="/users">
					<i class="fas fa-users"></i>
					<span>Usuarios</span>
				</a>
			</li>

      		<hr class="sidebar-divider mb-5">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

    	<!-- Content Wrapper -->
    	<div id="content-wrapper" class="d-flex flex-column">

      		<!-- Main Content -->
      		<div id="content">

        		<!-- Topbar -->
        		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          			<!-- Sidebar Toggle (Topbar) -->
          			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            			<i class="fa fa-bars"></i>
          			</button>

          			<!-- Topbar Navbar -->
          			<ul class="navbar-nav ml-auto">

            			<!-- Nav Item - User Information -->
            			<li class="nav-item dropdown no-arrow">
            				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            					<span class="mr-2 d-none d-lg-inline text-gray-600 small username">{{ auth()->name }}</span>
            					<img class="img-profile rounded-circle" src="{{ auth()->photo }}">
              				</a>

              				<!-- Dropdown - User Information -->
              				<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              					<a class="dropdown-item profile" href="{{ '/users/edit/' . auth()->id }}">
              						<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              						Perfil
              					</a>

              					<div class="dropdown-divider"></div>

              					<a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
              						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              						Cerrar sesión
              					</a>
              				</div>
              			</li>
              		</ul>
              	</nav>
              	<!-- End of Topbar -->

              	<div class="content">
              		@yield('content')
              	</div>

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Todos los derechos reservados &copy; Nisa Delgado 2019</span>
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

	@include('layouts/logout')

	<!-- Bootstrap core JavaScript-->
	<script src="{{ node('jquery/dist/jquery.js') }}"></script>
	<script src="{{ node('bootstrap/dist/js/bootstrap.bundle.js') }}"></script>

	<!-- Core plugin JavaScript-->
	<script src="{{ node('jquery.easing/jquery.easing.js') }}"></script>

	<!-- Datatables -->
	<script src="{{ node('datatables.net/js/jquery.dataTables.js') }}"></script>
	<script src="{{ node('datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
	<script src="{{ node('datatables.net-fixedheader/js/dataTables.fixedHeader.js') }}"></script>
	<script src="{{ node('datatables.net-responsive/js/dataTables.responsive.js') }}"></script>
	<script src="{{ node('datatables.net-responsive-bs4/js/responsive.bootstrap4.js') }}"></script>

	<!-- SweetAlert -->
	<script src="{{ node('sweetalert2/dist/sweetalert2.js') }}"></script>

	<!-- Custom scripts for all pages-->
	<script src="{{ asset('js/main.js') }}"></script>

	{{ components() }}

</body>

</html>
