@extends('layouts.template')
@section('content')

 <!-- Testimonial Start -->
  <div class="container-fluid bg-light py-6 px-5" data-aos="fade-up">
    <div class="text-center mx-auto mb-5" style="max-width: 700px;">
        <h3 class="display-8 text-lowcase mb-4"> NOTRE  DEVISE</h3>
        <h1 class="display-6 text-uppercase mb-4"><span class="text-primary2">‘’INVEST IN LAD’’ <br>  ‘’INVESTIR DANS LES PLUS JEUNES’’
            </span></h1>
    </div>
   
</div>
<!-- Testimonial End -->


 <!-- About Start -->
 <div class="container-fluid py-6 px-5" data-aos="fade-up">
    <div class="row g-5">
        <div class="col-lg-4 pb-5" style="min-height: 400px;">
            <div class="position-relative bg-dark-radial h-100 ms-5">
                <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="{{asset('assets/img/nara_icon1.jpg')}}" style="object-fit: cover;">
            </div>
        </div>

        <div class="col-lg-8" data-aos="fade-up">
            <h1 class="display-5 text-uppercase mb-4 text-center">Les Valeurs de <span class="text-primary2">G O AL</span>   <img width="70px" src="{{asset('assets/img/orange-heart.png')}}" alt=""></h1>
            <div class="row gx-5 py-2">
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><img width="30px" src="{{asset('assets/img/téléchargement (1).png')}}" alt=""> Honneur</p>
                    <p class="fw-bold mb-2"><img width="30px" src="{{asset('assets/img/téléchargement (2).png')}}" alt=""> Excellence</p>
                    <p class="fw-bold mb-2"><img width="30px" src="{{asset('assets/img/lettre-a-de-l-alphabet-de-couleur-orange-et-trois-silhouettes-d-oiseaux-isolee-sur-fond-blanc-vecteur-2hgnw1c.jpg')}}" alt=""> Redevabilité</p>
                </div>
                <div class="col-sm-6 mb-2">
                    <p class="fw-bold mb-2"><img width="30px" src="{{asset('assets/img/png-clipart-letter-alphabet-orange-color-orange-angle-text-thumbnail.png')}}" alt=""> Résilience</p>
                    <p class="fw-bold mb-2"><img width="30px" src="{{asset('assets/img/téléchargement (3).png')}}" alt="">   Tolérance</p>
                </div>
            </div>
           <p><span class="text-primary2"> Honnor/Honneur </span></p>
           <p>Doing everything with honor and respect and developing young people of honour with good self-esteem <br>
            ______ <br>
            Faire tout avec honneur et respect et former des jeunes d'honneur avec une bonne estime de soi.
            </p>

            <p><span class="text-primary2"> Excellence </span></p>
           <p>Acting with excellence and inspiring excellence and the desire to do well in every young person we come into contact with <br>
            _____ <br>
            Agir avec excellence et inspirer l'excellence et le désir de bien faire chez chaque jeune avec en contact avec nous.            
            </p>

            <p><span class="text-primary2"> Accountability/Redevabilité </span></p>
           <p>We are mindful of our accountability to God, our peers, young people and any other person or organization that trusts us. <br>
            _____ <br>
            Nous gardons à l'esprit notre redevabilité envers Dieu, nos pairs, les jeunes et toute autre personne et entité qui nous fait confiance.            
            </p>

            <p><span class="text-primary2"> Resilience/Résilience </span></p>
           <p>Being resilient and offering resilience and hope to young people through and for their families and society <br>
            _______ <br>
            Être résilient et offrir de la résilience et de l'espoir aux jeunes à travers et pour leurs familles et la société.
            </p>

            <p><span class="text-primary2"> Tolerance/Tolérance </span></p>
           <p>Listening, collaborating and exchanging in tolerance in order to give young people another chance. <br>
            _______ <br>
            Écouter, collaborer et échanger dans la tolérance afin de donner une autre chance aux jeunes.
            </p>
        </div>
       
    </div>
</div>
<!-- About End -->


 

@endsection