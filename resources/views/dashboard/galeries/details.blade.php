@extends('layouts.template2')
@section('content')

<div class="content container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                   <div class="service-header">
                        <div class="service-inner">
                            <h2>Details Galerie</h2>
                            <address class="service-location"><i class="fas fa-location-arrow"></i> {{$galeries->description}}</address>
                        </div>
                    </div> 
                    <div class="service-description">
                        <div class="service-images service-carousel">
                            <div class="images-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{ $galeries->video }}" alt="" class="img-fluid">
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