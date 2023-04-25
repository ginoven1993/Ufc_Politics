@extends('layouts.template')

@section('content')

		<section class=" popular-services dots-hover service-five aos" id="about" data-keyboard="false" data-backdrop="static" data-aos="fade-up">
                    <div class="col-lg-7 col-md-6 col-sm-12">
						<div class="propos-img">
							 <img src="{{asset('assets/img/galerie/gal8.jpg')}}" alt=""> 
						</div>
					</div>
					<div class="col-lg-5 col-md-6 col-sm-12">
						<div class="propos-content">
							<h1> NOS OBJECTIFS</h1>
								 <p> * Mettre en place une synergie d’actions et d’acteurs pour aider ‘’les jeunes, les adolescents et les enfants’’ à prendre de bonnes décisions pour un (leur) lendemain responsable et décent. <br> <br>
									* Travailler et collaborer pour mettre en place des créneaux d’échanges, de sensibilisation et de renforcement de capacité pour toute personne impliquée dans l’éducation et le suivi ‘’des jeunes, des adolescents et des enfants.’’ <br> <br>
									* Mettre en place des projets et aider ‘’les jeunes, adolescents et les en enfants’’ à développer des projets pour valoriser leurs talents et compétences divers pour un meilleur engagement sur les sujets de société
								</p> 
						</div>
					</div>	
        </section>  
	 		
		<!-- Featured Category  -->
		<section class="feature-category dots-hover category-five" id="evenement" data-keyboard="false" data-backdrop="static">
			<div class="container">
				<div class="section-heading section-five text-center aos" data-aos="fade-up"> <br> <br> <br> <br><br> <br>  <br> <br> <br>
					<h2>  Nos Evènements </h2> 
				</div>
				<div class="service-carousel">
					<div class="categories-slider owl-carousel owl-theme aos" data-aos="fade-up" >
						@foreach ($events as $event)
							
						
					<div class="categories-box">
								<div class="cate-widget">
									<img src="{{ $event->video }}" alt="">
									<div class="layout">
										<h4>{{$event->titre}}</h4>
										<p>{{$event->description}}</p>
										<a href="/admin//galeries/details/{{$event->id}}"><i class="fas fa-external-link-alt"></i></a>
								   </div>
								</div>		
						</div>
						@endforeach
						<div class="categories-box">
								<div class="cate-widget">
									<img src="{{asset('assets/img/galerie/galerie4.jpg')}}" alt="">
									<div class="layout">
										<h4>EDUCATIFS</h4>
										<p>Ateliers de Formation</p>
										<a href="/educations"><i class="fas fa-external-link-alt"></i></a>
								   </div>
								</div>
						</div>
						<div class="categories-box">
								<div class="cate-widget">
									<img src="{{asset('assets/img/galerie/gal9.jpg')}}" alt="">
									<div class="layout">
										<h4>SOCIALES</h4>
										<p>Apprentissage de langues</p>
										<a href="/sociales"><i class="fas fa-external-link-alt"></i></a>
								   </div>
								</div>
						</div>
						<div class="categories-box">
								<div class="cate-widget">
									<img src="{{asset('assets/img/evenements/events3.jpg')}}" alt="">
									<div class="layout">
										<h4>HUMANITAIRES</h4>
										<p>Visite aux Orphelins de Blitta</p>
										<a href="/humanitaires"><i class="fas fa-external-link-alt"></i></a>
								   </div>
								</div>
						</div>
						<div class="categories-box">
								<div class="cate-widget">
									<img src="{{asset('assets/img/galerie/INVESTISSEMENT.jpg')}}" alt="">
									<div class="layout">
										<h4>CITATIONS</h4>
										<p>Anecdotes Revitalisants</p>
										<a href="/citations"><i class="fas fa-external-link-alt"></i></a>
								   </div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Featured Evenements -->

		<!-- Modules -->
		<section class="how-work work-five" id="galerie" data-keyboard="false" data-backdrop="static">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-heading section-five text-center aos" data-aos="fade-up">	
							<h2>Explorez Notre Galerie  </h2>
						</div>
						<section class="carousel">
							<ul class="slides">
							  <li>
								<img src="{{asset('assets/img/galerie/galerie6.jpg')}}" alt="Slide 1">
								
							  </li>
							  <li>
								<img src="{{asset('assets/img/galerie/galerie1.jpg')}}" alt="Slide 2">
								
							  </li>
							  <li>
								<img src="{{asset('assets/img/galerie/gal13.jpg')}}" alt="Slide 3">
								
							  </li>
							  <li>
								<img src="{{asset('assets/img/galerie/galerie5.jpg')}}" alt="Slide 4">
								
							  </li>
							  
							</ul>
						  </section>
					</div>
				</div>
			</div>
		</section>
	

		<!-- How It Works -->
		<section class="how-work work-standard" id="guide" data-keyboard="false" data-backdrop="static">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="top-section-head popular-head aos" data-aos="fade-up">
							<h2>Donation</h2>
						</div>
						<div class="section-heading section-heading-three text-center aos" data-aos="fade-up">
							<span>Les etapes a suivre pour faire un Don</span>
							<div class="section-three">
								<h2>En toute sécurité</h2>
							</div>	
						</div>
						<div class="howworksec aos" data-aos="fade-up">
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box">
										<div class="step-number">
											Etape 1
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="assets/img/work-icon-10.png" alt="">
										</div>
										<h3>Clic sur Faire un don</h3>
											<p>Choisissez votre mode de paiement et Renseigner les informations requis.</p>
										<h2>01</h2>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box hiw-arrow">
										<div class="step-number">
											Etape 2
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="assets/img/work-icon-11.png" alt="">
										</div>
										<h3>Réalisez votre transfert</h3>
											<p>En toute sécurité via Carte Bancaire, Mobile Money , etc....</p>
										<h2>02</h2>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="howwork work-box">
										<div class="step-number">
											Etape 3
										</div>
										<div class="iconround d-flex align-items-center justify-content-center">
											<img src="assets/img/work-icon-12.png" alt="">
										</div>
										<h3>Confirmer votre Don </h3>
											<p>Un message vous sera envoyé pour confirmation .</p>
										<h2>03</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /How It Works -->
		
			<section class="how-work work-standard">	
				<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d15865.33786851241!2d1.1629984!3d6.2195505!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x102159cd847f69e1%3A0x121f6475b6c3cb88!2s65G2%2BGW%20Goad%20Adives%20for%20Lads%20(GoAL)%2C%20Lom%C3%A9!3m2!1d6.2195504999999995!2d1.1629984!5e0!3m2!1sfr!2stg!4v1677597866303!5m2!1sfr!2stg" width="1720" height="465" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
			</section>

		
@endsection
