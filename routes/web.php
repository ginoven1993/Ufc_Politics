<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\GalerieController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [IndexController::class, 'index']);

Route::get('/donation', function () {
    return view('donation');
});

Route::get('/propos', function () {
    return view('propos');
});

Route::get('/evenements', function () { return view('events.evenement');});

Route::get('/citations', function () { return view('events.citation');});

Route::get('/sportifs', function () { return view('events.sportif');});

Route::get('/educations', function () { return view('events.education');});

Route::get('/sociales', function () { return view('events.sociale');});

Route::get('/humanitaires', function () { return view('events.humanitaire');});

Route::get('/test', function () { return view('events.test');});

Route::prefix('admin')->group(function () {

    Route::get('', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/authenticate',[AdminController::class, 'authenticate'])->name('admin.authenticate');

    Route::group(['middleware' => ['admin']], function () {

            Route::get('/dashboard', [DashboardController::class, 'index']);

            Route::get('/galeries',[GalerieController::class, 'index'])->name('galerie.index');
            Route::post('/galeries/store',[GalerieController::class, 'store'])->name('galerie.store');
            Route::get('/galeries/show',[GalerieController::class, 'show'])->name('galerie.show');
            Route::get('/galeries/details/{id}',[GalerieController::class, 'details'])->name('galerie.details');
            Route::get('/galeries/delete/{id}',[GalerieController::class, 'delete'])->name('galerie.delete');
            Route::post('/galeries/update/{id}',[GalerieController::class, 'update'])->name('galerie.update');
           
           
           
            Route::get('/events',[EvenementController::class, 'index'])->name('event.index');
            Route::post('/events/store',[EvenementController::class, 'store'])->name('event.store');
            Route::get('/events/show',[EvenementController::class, 'show'])->name('event.show');
            Route::get('/events/details/{id}',[EvenementController::class, 'details'])->name('event.details');
            Route::get('/events/delete/{id}',[EvenementController::class, 'delete'])->name('event.delete');
            Route::post('/events/update/{id}',[EvenementController::class, 'update'])->name('event.update');
           
            Route::get('/donations',[DonationController::class, 'show'])->name('donation.show');
            Route::get('/donations/delete/{id}',[DonationController::class, 'delete'])->name('donation.delete');
            Route::post('/donations/update/{id}',[DonationController::class, 'update'])->name('donation.update');
    });
});



