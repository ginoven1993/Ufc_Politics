@extends('layouts.template2')
@section('content')

<div class="content container-fluid">
			
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col">
                <h3 class="page-title">Evenements</h3>
            </div>
            {{-- <div class="col-auto text-end">
                <a href="{{route('event.index')}}" class="btn btn-primary add-button ms-3">
                    <i class="fas fa-plus"></i>
                </a>
            </div> --}}
        </div>
    </div>
    <!-- /Page Header -->
     
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>Type de Payement</th>
                                    <th>Montant</th>
                                    <th>Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                        <tr>
                                            <td>Shippuden</td>
                                            <td>Naruto</td>
                                            <td> Card Visa</td>
                                            <td> 15000 </td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input id="rating_1" class="check" type="checkbox" checked>
                                                    <label for="rating_1" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                           
                                            <td class="text-end">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editElement" class="btn btn-sm bg-success-light me-2">	<i class="far fa-edit me-1"></i> Modifier</button>
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#deleteElement" class="btn btn-sm bg-danger-light me-2">Supprimer</button>
                                                <a href="/donations/details/" class="btn btn-sm  me-2" style="color: #0d6efd;background-color:rgb(203, 181, 181)"> Details</a>
                                            </td>
                                        </tr> 
                                        <div class="modal fade" id="deleteElement" tabindex="-1" role="dialog" aria-labelledby="deleteElementLabel"
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
                                                  Etes-vous sur de vouloir supprimer cet evènement ?
                                                </div>
                                                <div class="modal-footer bg-whitesmoke br">
                                                    <a href="/events/delete/" class="btn btn-primary">OUI</a>
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">NON</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>   
                                          
                                          {{-- <div class="modal fade" id="editElement" tabindex="-1" role="dialog" aria-labelledby="EditelementModal"
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
                                                  <form class="" action="/events/update/" method="POST">
                                                   
                                                    <div class="form-group">
                                                        <label>Type de payement</label>
                                                        <select name="type_payement" id="">
                                                            <option selected disabled value="">Choisir le type de payement</option>
                                                            <option value="">Mobile Money</option>
                                                            <option value=""> Visa Card</option>
                                                            <option value=""></option>
                                                            <option value=""></option>
                                                        </select>
                                                        <input class="form-control" type="text" name="titre" value="" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date</label>
                                                        <input class="form-control" type="date" name="date" value="" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Heure</label>
                                                        <input class="form-control" type="time" name="heure" value="" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lieu</label>
                                                        <input class="form-control" type="text" name="lieu" value="" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <input class="form-control" type="text" name="description" value="" >
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary m-t-15 waves-effect" type="submit">MODIFIER</button>
                                                        <a href="" class="btn btn-link">ANNULER</a>
                                                    </div>
                                                  
                                                  </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div> --}}
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection