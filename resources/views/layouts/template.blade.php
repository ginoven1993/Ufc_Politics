<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>GOAL Association</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favic.png')}}">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/owlcarousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/owlcarousel/owl.theme.default.min.css')}}">
	
	<!-- Aos CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/aos/aos.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('assets/css/style3.css')}}"> --}}
</head>

<body class="body-five">

	<!-- Loader -->
	<div class="page-loading">
		<div class="preloader-inner">
			<div class="preloader-square-swapping">
				<div class="cssload-square-part cssload-square-green"></div>
				<div class="cssload-square-part cssload-square-pink"></div>
				<div class="cssload-square-blend"></div>
			</div>
		</div>
	</div>
	<!-- /Loader -->
	
	<div class="main-wrapper">

        	<!-- Header -->
		<header class="header header-five">
			<nav class="navbar navbar-expand-lg header-nav scroll-sticky-truely">
				<div class="navbar-header">
					<a id="mobile_btn" href="javascript:void(0);">
						<span class="bar-icon">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</a>
					<a href="/" class="navbar-brand logo">
						<img width="50px" src="{{asset('assets/img/nara_icon1.jpg')}}" class="img-fluid" alt="Logo">
					</a>
					
				</div>
				<div class="main-menu-wrapper">
					<div class="menu-header">
					<!--	<a href="#" class="menu-logo">
							<img src="" class="img-fluid" alt="Logo">
						</a> -->
						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
					</div>
					<ul class="main-nav">
						<li class="active has-submenu">
							<a href="/">Accueil</a>
						</li>
						<li class="has-submenu">
							<a href="/propos">A Propos</a>
						</li>
						<li class="has-submenu">
							<a href="" data-bs-target="#evenement">Evènements</a>
						</li>
						<li class="has-submenu">
							<a href="" data-bs-target="#galerie">Galerie</a>
						</li>
					</ul>
				</div>
				<ul class="nav header-navbar-rht">
					<li class="nav-item">
						<a class="nav-link header-login" href="/donation"><i class="fas fa-money-bill"></i>DONATION</a>
					</li>
				</ul>
			<!--	<select id="lang-selector" class="selector">
					<option value="en">En</option>
					<option value="fr">Fr</option>
				</select> -->
			</nav>
		</header>
		<!-- /Header -->
		
		<!-- Hero Section -->
		<section class="hero-section hero-five">
			<div class="hero-screen">
				<div class="layer">
					<div class="home-banner-five"></div>
					<div class="container">
						<div class="row ">
							<div class="col-lg-8">
								<div class="hero-section-search d-flex align-items-center">
									<div class="section-search aos" data-aos="fade-up">
										<h3> <span> G  O A  L</h3>
										<p>Faire des jeunes et adolescents des personnes jouissant de leur droit, épanouies, responsables et décentes capables d’en produire des pairs. <br>
										</p>
										<div class="search-cat">
											<a href="/donation" data-bs-toggle="modal" data-bs-target="#register">DONATION</a>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Hero Section -->
		
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

		<!-- /A Propos --> <br> <br> <br> <br>

        @yield('content');
	
        <!-- Footer -->
		<footer class="footer footer-five">
		
			<!-- Footer Top -->
			<div class="footer-top aos" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="footer-circle">
								<img src="{{asset('assets/img/foot-circle.png')}}" alt="img">
							</div>
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<div class="footer-logo-sell">
									<img src="{{asset('assets/img/icon22.png')}}" alt="img"> 
								</div>
								
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Services</h2>
								<ul>
									<li>
										<a href="#"><i class="fas fa-check-double"></i>A Propos</a>
									</li>
									<li>
										<a href="#"><i class="fas fa-check-double"></i>Evènements </a>
									</li>
									<li>
										<a href="#"><i class="fas fa-check-double"></i>Témoignages</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact </h2>
								<div class="footer-contact-info">
									<p><i class="fa fa-mobile"></i> 00228 90 52 90 56</p>
									<p class="mb-0"><i class="fas fa-envelope"></i> <a href="#" class="__cf_email__" data-cfemail="1a6e686f7f7663697f76765a7f627b776a767f34797577">goal.tg@gmail.com</a></p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-five-dots">
								<img src="{{asset('assets/img/foot-dot-1.png')}}" alt="img">
							</div>
							<!-- Footer Widget -->
							<div class="footer-widget">
								<h2 class="footer-title">Suivez nous</h2>
								<div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="Entrer votre Email">
                                    <a href="search.html" class="btn footer-btn d-flex align-items-center justify-content-center">
                                        <i class="fas fa-paper-plane"></i>
                                    </a>
                                </div>
								<div class="social-icon">
									<ul>
										<li>
											<a href="#" target="_blank"><i class="fab fa-facebook-f" style="color: #eb5612;"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter" style="color: #eb5612;"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-youtube" style="color: #eb5612;"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-google" style="color: #eb5612;"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
					</div>  <hr> 
				</div>
			</div>
			<!-- /Footer Top -->
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<!-- Copyright -->
					<div class="copyright">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="copyright-text">
									<p class="mb-0">&copy; 2023 <a href="index-2.html">KODINART</a>. Tous droits Reservés.</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<!-- Copyright Menu -->
								<div class="copyright-menu">
									<ul class="policy-menu">
										<li>
											<a href="term-condition.html">Termes et Conditions</a>
										</li>
										<li>
											<a href="privacy-policy.html">Privés</a>
										</li>
									</ul>
								</div>
								<!-- /Copyright Menu -->
							</div>
						</div>
					</div>
					<!-- /Copyright -->
				</div>
			</div>
			<!-- /Footer Bottom -->
			
		</footer>
		<!-- /Footer -->
    </div>

    <!-- jQuery -->
	<script src="{{asset('assets2/js/jquery-3.6.0.min.js')}}"></script>
	<!-- Bootstrap Core JS -->
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- Owl JS -->
	<script src="{{asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
	<script src="https://kit.fontawesome.com/2285b47d7f.js" crossorigin="anonymous"></script>
	<!-- Aos -->
	<script src="{{asset('assets/plugins/aos/aos.js')}}"></script>
	<!-- Custom JS -->
	<script src="{{asset('assets/js/script.js')}}"></script>
	 <!-- SWEETALERT -->
	 <script src="{{asset('assets2/js/sweetalert2.all.js')}}"></script>

	
		<script>
			var langSelector = document.getElementById('lang-selector');
			langSelector.addEventListener('change', function() {
				window.location.href = window.location.origin + '/' + langSelector.value + window.location.pathname + window.location.search;
			});
		</script>
	
	
</body>

</html>