<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Dashboard | GOAL</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="{{asset('assets2/img/favicon.png')}}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets2/plugins/bootstrap/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets2/plugins/fontawesome/css/all.min.css')}}">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('assets2/css/animate.min.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets2/css/admin.css')}}">

</head>

<body>
    <div class="main-wrapper">
	
		<!-- Header -->
		<div class="header">
			<div class="header-left"> 
				<a href="" class="logo logo-small">
					<img src="{{asset('assets2/img/logo-icon.png')}}" alt="Logo" width="30" height="30">
				</a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn">
				<i class="fas fa-align-left"></i>
			</a>
			<a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
				<i class="fas fa-align-left"></i>
			</a>
			
			<ul class="nav user-menu">
				<!-- Notifications -->
				<!-- <li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
						<i class="far fa-bell"></i>  <span class="badge badge-pill"></span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="assets2/img/provider/provider-01.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Thomas Herzberg have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">15 Sep 2020 10:20 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-02.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Matthew Garcia have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">13 Sep 2020 03:56 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-03.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Yolanda Potter have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">12 Sep 2020 09:25 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-04.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Ricardo Flemings have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">11 Sep 2020 06:36 PM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-05.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Maritza Wasson have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">10 Sep 2020 08:42 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-06.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Marya Ruiz have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">9 Sep 2020 11:01 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="admin-notification.html">
										<div class="media d-flex">
											<span class="avatar avatar-sm flex-shrink-0">
												<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-07.jpg">
											</span>
											<div class="media-body flex-grow-1">
												<p class="noti-details">
													<span class="noti-title">Richard Hughes have been subscribed</span>
												</p>
												<p class="noti-time">
													<span class="notification-time">8 Sep 2020 06:23 AM</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						 <div class="topnav-dropdown-footer">
							<a href="admin-notification.html">View all Notifications</a>
						</div> 
					</div>
				</li> -->
				<!-- /Notifications -->
				
				<!-- User Menu -->
				<li class="nav-item dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-bs-toggle="dropdown">
						<span class="user-img">
							<img class="rounded-circle" src="{{asset('assets2/img/user.jpg')}}" width="40" alt="Admin">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a class="dropdown-item" href="">Profile</a>
						<a class="dropdown-item" href="">Logout</a>
					</div>
				</li>
				<!-- /User Menu -->
			</ul>
		</div>
		<!-- /Header -->
		
		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-logo">
				<a href="">
					<img src="{{asset('assets2/img/logo-icon.png')}}" class="img-fluid" alt="">
				</a>
			</div>
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="active">
							<a href="/"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
						</li>
						<li>
							<a href="{{route('galerie.show')}}"><i class="fas fa-layer-group"></i> <span>Galeries</span></a>
						</li>
						<li>
							<a href="{{route('event.show')}}"><i class="fab fa-buffer"></i> <span>Evènements</span></a>
						</li>
						<li>
							<a href="{{route('donation.show')}}"><i class="fas fa-hashtag"></i> <span>Donations</span></a>
						</li>
						<li>
							<a href=""><i class="fas fa-user"></i> <span>Utilisateurs</span></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->
		@if (Session::has('flash_message_error'))
		<script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
		<script type="text/javascript">;
			Swal.fire({
			position: 'top-end',
			icon: 'error',
			title: "{{ session('flash_message_error') }}",
			showConfirmButton: false,
			timer: 4000
			});
		</script>
	@endif
	@if (Session::has('flash_message_success'))
		<script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
		<script type="text/javascript">;
			Swal.fire({
			position: 'top-end',
			icon: 'success',
			title: "{{ session('flash_message_success') }}",
			showConfirmButton: false,
			timer: 4000
			});
		</script>
	@endif
					
					<div class="page-wrapper">
						@yield('content')
					</div> 
				</div>

	 <script>
			const listItems = document.querySelectorAll('.sidebar-menu li');

			// Ajoutez un écouteur d'événements pour chaque élément de la liste
			listItems.forEach(item => {
			item.addEventListener('click', () => {
				// Supprimez la classe active de tous les éléments de la liste
				listItems.forEach(item => {
				item.classList.remove('active');
				});

				// Ajoutez la classe active à l'élément de liste cliqué
				item.classList.add('active');
			});
			});
	</script> 

    	<!-- jQuery -->
	<script src="{{asset('assets2/js/jquery-3.6.0.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets2/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets2/js/moment.min.js')}}"></script>
	<script src="{{asset('assets2/js/bootstrap-datetimepicker.min.js')}}"></script>

	<!-- Slimscroll JS -->
	<script src="{{asset('assets2/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

	<!-- Custom JS -->
	<script src="{{asset('assets2/js/admin.js')}}"></script>

	 <!-- SWEETALERT -->
	 <script src="{{asset('assets2/js/sweetalert2.all.js')}}"></script>

	  <!-- BootStrap JS -->
	   <script src="{{asset('assets2/js/bootstrap.min.js')}}"></script> 

	   <!-- Datatables JS -->
	<script src="{{asset('assets2/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/datatables/datatables.min.js')}}"></script>

</body>


</html>