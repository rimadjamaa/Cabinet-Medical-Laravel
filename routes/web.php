<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\ImpayeeController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\FichePatientController;
use App\Http\Controllers\MutuelleController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\Assistance\HomeController;
use App\Http\Controllers\Assistance\PationController;
use App\Http\Controllers\Assistance\DoctorsController;
use App\Http\Controllers\Assistance\ConsultationController;
use App\Http\Controllers\Assistance\OrdonnanceController;
use App\Http\Controllers\Assistance\RDVController;


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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');
Route::get('/doctors', function () {
    return view('frontend.pages.doctors');
})->name('doctors');
Route::get('/blog', function () {
    return view('frontend.pages.blog');
})->name('blog');
Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');

Auth::routes();

Route::group(['middleware' => 'assistance', 'namespace' => 'Assistance' ,'as' => 'assistance.'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/pations', [PationController::class, 'index'])->name('pations.index');
    Route::delete('/pations/{id}', [PationController::class, 'destroy'])->name('pations.destroy');
    Route::post('/pations', [PationController::class, 'store'])->name('pations.store');
    Route::get('/pations/create', [PationController::class, 'create'])->name('pations.create');
    
    Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors.index');
    Route::delete('/doctors/{id}', [DoctorsController::class, 'destroy'])->name('doctors.destroy');
    Route::post('/doctors', [DoctorsController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/create', [DoctorsController::class, 'create'])->name('doctors.create');

    Route::get('/consultation', [ConsultationController::class, 'index'])->name('consultation.index');
    Route::delete('/consultation/{id}', [ConsultationController::class, 'destroy'])->name('consultation.destroy');
    Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
    Route::get('/consultation/create', [ConsultationController::class, 'create'])->name('consultation.create');

    Route::get('/ordonnance', [OrdonnanceController::class, 'index'])->name('ordonnance.index');
    Route::delete('/ordonnance/{id}', [OrdonnanceController::class, 'destroy'])->name('ordonnance.destroy');

    Route::get('/RDV', [RDVController::class, 'index'])->name('RDV.index');
    Route::delete('/RDV/{id}', [RDVController::class, 'destroy'])->name('RDV.destroy');
    Route::post('/RDV', [RDVController::class, 'store'])->name('RDV.store');
    Route::get('/RDV/create', [RDVController::class, 'create'])->name('RDV.create');
    
});