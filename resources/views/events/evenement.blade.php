@extends('layouts.template')

@section('content')

<div class="main-wrapper">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="service-view">
						<div class="service-images service-carousel">
							<div class="images-carousel owl-carousel owl-theme">
								<div class="item">
									<img src="{{asset('assets/img/galerie/gal17.jpg')}}" alt="" class="img-fluid">
								</div>
								<div class="item">
									<img src="{{asset('assets/img/galerie/gal17.jpg')}}" alt="" class="img-fluid">
								</div>
								<div class="item">
									<img src="{{asset('assets/img/galerie/gal17.jpg')}}" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="service-details">
							<div class="tab-content">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<div class="card service-description">
										<div class="card-body">
											<h5 class="card-title">Details Evènements </h5>
											<p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia voluptatem maxime, porro exercitationem quis quo dolorem ipsa aliquam, animi sequi dolore laborum est, quibusdam eum veniam aliquid consectetur! Non, amet?
												Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint vitae eum ex ipsam quisquam iste dolor nobis consectetur laboriosam, fuga porro, totam aspernatur modi eius numquam debitis consequuntur tempora officia..</p>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>﻿
    
</div>

<!--  JS-->
<script>
	var mainerimg = document.querySelector("img");
	var images = ["{{asset('assets/img/galerie/galerie4.jpg')}}","{{asset('assets/img/galerie/edu.jpg')}}","{{asset('assets/img/galerie/edu2.jpg')}}","{{asset('assets/img/galerie/edu3.jpg')}}","{{asset('assets/img/galerie/edu4.jpg')}}"];
	var num = 0;
 
	function next(){
	 num++;
	 if(num>=images.lenght){
		 num=0;
		 mainerimg.src=images[num]
	 }else{
		 mainerimg.src=images[num]
	 }
	};
 
	function back(){
	 num--;
	 if(num<0){
		 num=images.lenght-1;
		 mainerimg.src=images[num]
	 }else{
		 mainerimg.src=images[num]
	 }
	};
 </script>
@endsection