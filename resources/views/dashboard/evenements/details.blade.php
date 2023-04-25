@extends('layouts.template2')
@section('content')

<div class="content container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                   <div class="service-header">
                        <div class="service-inner">
                            <h2>Details Evènements</h2>
                            <address class="service-location"><i class="fas fa-location-arrow"></i> {{$events->Titre}}</address>
                            <address class="service-location">{{$events->date}}</address>
                            <address class="service-location">{{$events->heure}}</address>
                            <address class="service-location">{{$events->lieu}}</address>
                            <address class="service-location">{{$events->description}}</address>
                        </div>
                    </div> 
                    <div class="service-description">
                        <div class="service-images service-carousel">
                            <div class="images-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{asset($galeries->photo)}}" alt="" class="img-fluid">
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="service-description">
                        <div class="service-images service-carousel">
                            <div class="images-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <video src="{{asset($galeries->video)}}" alt="" class="img-fluid"></video>
                                </div>           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>

@endsection