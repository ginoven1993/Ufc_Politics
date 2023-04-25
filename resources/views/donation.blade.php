@extends('layouts.template')
@section('content')
		
		
    <div class="container py-5">
            <!-- For demo purpose -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-6">Faites Vos Dons</h1>
                </div>
            </div> <!-- End -->
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Carte Visa</a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#mobile" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Mobile Money </a> </li>
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div id="credit-card" class="tab-pane fade show active pt-3">
                                    <form role="form" onsubmit="event.preventDefault()">
                                        <div class="form-group"> <label for="username">
                                                <h6>Nom & Prénoms Donateur</h6>
                                            </label> <input type="text" name="username" placeholder="Nom, Prénoms" required class="form-control "> </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Numéro de Carte</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="cardNumber" placeholder="Numéro de carte valide" class="form-control " required>
                                                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> <label><span class="hidden-xs">
                                                            <h6>Date D'Expiration</h6>
                                                        </span></label>
                                                    <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4"> <label data-toggle="tooltip" title=" Trois code CV digital au dos de votre carte">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> <input type="text" required class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirmer Payement </button>
                                    </form>
                                </div>
                            </div> <!-- End -->
                            
                            <!-- Paypal info -->
                            <div id="paypal" class="tab-pane fade pt-3">
                                <h6 class="pb-2">Selectionnez votre type de compte Paypal</h6>
                                <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestique </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                                <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Se Connecter a mon Paypal</button> </p>
                                <p class="text-muted"> Note: Après Clic sur le bouton, Vous serez redirigéer vers un portail sécurisé pour le paiement. Après avoir terminé le processus de payement, vous reviendrez sur le site web pour voir les détails de votre donation. </p>
                            </div> <!-- End -->

                            <!-- bank transfer info -->
                            <div id="mobile" class="tab-pane fade pt-3">
                                <div class="form-group "> <label for="Select Your Bank">
                                        <h6>Selectionner votre type de transfert</h6>
                                    </label> <select class="form-control" id="ccmonth">
                                        <option value="" selected disabled>--SVP, selectionne le type--</option>
                                        <option>T-Money</option>
                                        <option>Flooz</option>
                                    </select> </div>
                                <div class="form-group">
                                    <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceder au payement</button> </p>
                                </div>
                                <p class="text-muted"> Note: Après Clic sur le bouton, Vous serez redirigéer vers un portail sécurisé pour le paiement. Après avoir terminé le processus de payement, vous reviendrez sur le site web pour voir les détails de votre donation. </p>
                            </div> <!-- End -->
                            <!-- End -->
                        </div>
                    </div>
                </div>
      </div>
	
	
		
	</div>
	
	
@endsection