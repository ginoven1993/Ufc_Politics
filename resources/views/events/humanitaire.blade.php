@extends('layouts.template')

@section('content')

    <div class="mainer">
        <div class="slid">
            <img src="{{asset('assets/img/galerie/galerie2.jpg')}}" alt="image" class="image">
            <div class="bout">
                <button onclick="back()"><i class="fas fa-chevron-left"></i></button>
                <button onclick="next()"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div class="main-wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card service-description" style="margin-top: -5%">
                                <div class="card-body">
                                        <h5 class="card-title">Details Evènements Humanitaires</h5>
                                        <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia voluptatem maxime, porro exercitationem quis quo dolorem ipsa aliquam, animi sequi dolore laborum est, quibusdam eum veniam aliquid consectetur! Non, amet?
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint vitae eum ex ipsam quisquam iste dolor nobis consectetur laboriosam, fuga porro, totam aspernatur modi eius numquam debitis consequuntur tempora officia..</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--  JS-->
<script>
   var mainerimg = document.querySelector(".image");
   var images = ["{{asset('assets/img/galerie/galerie2.jpg')}}","{{asset('assets/img/galerie/huma.jpg')}}","{{asset('assets/img/galerie/huma2.jpg')}}","{{asset('assets/img/galerie/huma3.jpg')}}"];
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