@extends('layouts.template2')
@section('content')

<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Ajouter un Evènement</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="card">
                <div class="card-body">
                
                    <!-- Form -->
                    <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Photo</label>
                            <input class="form-control" type="file" id="photo" name="photo" accept="image/*" multiple>
                        </div>
                        <div class="form-group">
                            <label>Video</label>
                            <input class="form-control" type="file" id="video" name="video" accept="video/*" multiple>
                        </div>
                        <div class="form-group">
                            <label>Titre</label>
                            <input class="form-control" type="text" name="titre">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input class="form-control" type="date" name="date">
                        </div>
                        <div class="form-group">
                            <label>Heure</label>
                            <input class="form-control" type="time" name="heure">
                        </div>
                        <div class="form-group">
                            <label>Lieu</label>
                            <input class="form-control" type="text" name="lieu">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input class="form-control" type="text" name="description">
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary" type="submit">AJOUTER</button>
                            <a href="/admin/events/show" class="btn btn-link">ANNULER</a>
                        </div>
                    </form>
                    <!-- Form -->
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection