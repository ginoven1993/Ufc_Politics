<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Dashboard | Admin</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}">
	
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
    {{-- <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-style.css')}}"> --}}

</head>

<body>

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
	

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
          <div class="col-12 mx-auto tm-login-col">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <div class="row">
                <div class="col-12 text-center">
                  <h2 class="tm-block-title mb-4">Welcome to Dash_Goal</h2>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-12">
                  <form action="{{route('admin.authenticate')}}" method="POST" class="tm-login-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email"  class="form-control" required>
                    </div>
                    <div class="form-group mt-3">
                      <label for="password">Password</label>
                      <input type="password" name="password"  class="form-control" required>
                    </div>
                    <div class="form-group mt-4">
                      <button type="submit" class="btn btn-primary btn-block text-uppercase">
                        Login
                      </button>
                    </div>
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- jQuery -->
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Owl JS -->
<script src="{{asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Aos -->
<script src="{{asset('assets/plugins/aos/aos.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>

</body>

<!-- Mirrored from html.truelysell.com/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2022 01:13:06 GMT -->
</html>

