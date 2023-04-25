@extends('layouts.template2')
@section('content')

<div class="content container-fluid">
			
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Galeries</h3>
            </div>
            <div class="col-auto text-end">
                {{-- <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                    <i class="fas fa-filter"></i>
                </a> --}}
                <a href="{{route('galerie.index')}}" class="btn btn-primary add-button ms-3">
                    <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    
    <!-- Search Filter 
    <div class="card filter-card" id="filter_inputs">
        <div class="card-body pb-0">
            <form action="#" method="POST">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select">
                                <option>Select category</option>
                                <option>Automobile</option>
                                <option>Construction</option>
                                <option>Interior</option>
                                <option>Cleaning</option>
                                <option>Electrical</option>
                                <option>Carpentry</option>
                                <option>Computer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>From Date</label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>To Date</label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <button class="btn btn-primary btn-block w-100" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
     /Search Filter -->
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Photos</th>
                                    <th>Description</th>
                                    <th>Videos</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galeries as $galerie)
                                        <tr>
                                            <td> 
                                               
                                                <img class="rounded service-img me-1" src="{{asset($galerie->photo)}}" alt="Galerie Image">
                                              
                                             </td>
                                            <td>{{$galerie->description}}</td>
                                            <td>
                                                @if ($galerie->video != "NULL")
                                                    <video class="rounded service-img me-1" src="{{asset($galerie->video)}}" alt="Galerie Video"  controls></video>
                                                @else
                                                   No Video
                                                @endif
                                            </td>
                                              
                                            <td class="text-end">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editElement{{$galerie->id}}" class="btn btn-sm bg-success-light me-2">	<i class="far fa-edit me-1"></i> Modifier</button>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteElement{{$galerie->id}}" class="btn btn-sm bg-danger-light me-2">Supprimer</button>
                                                <a href="/admin/galeries/details/{{$galerie->id}}" class="btn btn-sm  me-2" style="color: #0d6efd;background-color:rgb(203, 181, 181)"> Details</a>
                                            </td>
                                        </tr> 
                                        <div class="modal fade" id="deleteElement{{$galerie->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteElementLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="deleteEventLabel">Suppression</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  Etes-vous sur de vouloir supprimer cet élément de la galerie ?
                                                </div>
                                                <div class="modal-footer bg-whitesmoke br">
                                                    <a href="/admin/galeries/delete/{{$galerie->id}}" class="btn btn-primary">OUI</a>
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">NON</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>   
                                          
                                          <div class="modal fade" id="editElement{{$galerie->id}}" tabindex="-1" role="dialog" aria-labelledby="EditelementModal"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="EditelementModal">Mise a jour de donnée</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <form class="" action="/admin/galeries/update/{{$galerie->id}}" method="POST">
                                                    <div class="form-group">
                                                        <label>Photo</label>
                                                        <input class="form-control" type="file" id="photo" name="photo" value="{{asset($galerie->photo)}}" accept="image/*" multiple>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Video</label>
                                                        <input class="form-control" type="file" id="video" name="video" value="{{$galerie->video}}" accept="video/*" multiple>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input class="form-control" type="text" name="description" value="{{$galerie->description}}">
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary m-t-15 waves-effect" type="submit">MODIFIER</button>
                                                        <a href="" class="btn btn-link">ANNULER</a>
                                                    </div>
                                                  
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection