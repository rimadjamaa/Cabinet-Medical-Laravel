<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RendezVousController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\OrdonnanceController;
use App\Http\Controllers\ImpayeeController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\CertificatController;
use App\Http\Controllers\FichePatientController;
use App\Http\Controllers\MutuelleController;
use App\Http\Controllers\ExamenController;
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
});

/*---------RDV------------ */
Route::get('/RDVRDV',[RendezVousController::class,'index'])->name('RDV');
Route::get('/save',[RendezVousController::class,'save']);
Route::get('/RDV',[RendezVousController::class,'listRDV'])->name('listRDV');
Route::get('/delete',[RendezVousController::class,'delete']);
Route::get('/edit/{id}',[RendezVousController::class,'edit'])->name('/edit');
Route::get('/update/{id}',[RendezVousController::class,'update'])->name('/update');

/*---------Depense------------ */
Route::get('/depense',[DepenseController::class,'index'])->name('depense');
Route::get('/saveD',[DepenseController::class,'save']);
Route::get('/listDepenses',[DepenseController::class,'listDepenses'])->name('listDepenses');
Route::get('/editD /{id}',[DepenseController::class,'edit'])->name('/editD');
Route::get('/updateD/{id}',[DepenseController::class,'update'])->name('/updateD');
Route::get('/viewD/{id}',[DepenseController::class,'show'])->name('/viewD');

/*---------facture------------ */
Route::get('/facture',[FactureController::class,'index'])->name('facture');
Route::get('/saveF',[FactureController::class,'save']);
Route::get('/listFactures',[FactureController::class,'listFactures'])->name('listFactures');
Route::get('/deleteF',[FactureController::class,'delete']);
Route::get('/editF /{id}',[FactureController::class,'edit'])->name('/editF');
Route::get('/updateF/{id}',[FactureController::class,'update'])->name('/updateF');
Route::get('/viewF/{id}',[FactureController::class,'show'])->name('/viewF');
Auth::routes();

/*---------Authentification--------*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth','role:admin'])->group(function(){
   
//dossier medical
//safae  
/**********************************ordonnance************************************************************/
Route::get('Ordonnance/list',[OrdonnanceController::class,'list'])->name('Ordonnance.index');
Route::get('Ordonnance/voir/{id}',[OrdonnanceController::class,'show'])->name('Ordonnance.Voir');
Route::post('Ordonnance/store',[OrdonnanceController::class,'store'])->name('Ordonnance.store');
Route::get('Ordonnance/edit/{id}',[OrdonnanceController::class,'edit'])->name('Ordonnance.Modify');
Route::put('Ordonnance/update/{id}',[OrdonnanceController::class,'update'])->name('Ordonnance.update');
Route::get('Ordonnance/create',[OrdonnanceController::class,'create'])->name('Ordonnance.create');
Route::get('Ordonnance/delete/{id}',[OrdonnanceController::class,'destroy'])->name('Ordonnance.delete');

/*************************************Consultation*********************************************/
Route::get('Consultation/create',[ConsultationController::class,'create'])->name('Consultation.create');
Route::get('Consultation/list',[ConsultationController::class,'list'])->name('Consultation.index');
Route::get('Consultation/edit/{id}',[ConsultationController::class,'edit'])->name('Consultation.Modify');
Route::post('Consultation/store',[ConsultationController::class,'store'])->name('Consultation.store');
Route::put('Consultation/update/{id}',[ConsultationController::class,'update'])->name('Consultation.update');
Route::get('Consultation/delete/{id}',[ConsultationController::class,'destroy'])->name('Consultation.delete');

/*************************************certificat*********************************************/
Route::resource('/Certificat', CertificatController::class);

/*************************************mutuelle*********************************************/
Route::resource('/FicheMut', MutuelleController::class);

/*************************************examen*********************************************/
Route::resource('/Fiche_Examen', ExamenController::class);


});


//safae
/**********************************Impayee************************************************************/
Route::get('Impayee/create',[ImpayeeController::class,'create'])->name('Impayee.create');
Route::get('Impayee/list',[ImpayeeController::class,'list'])->name('Impayee.index');
Route::get('Impayee/edit/{id}',[ImpayeeController::class,'edit'])->name('Impayee.Modify');
Route::post('Impayee/store',[ImpayeeController::class,'store'])->name('Impayee.store');
Route::put('Impayee/update/{id}',[ImpayeeController::class,'update'])->name('Impayee.update');
Route::get('Impayee/delete/{id}',[ImpayeeController::class,'destroy'])->name('Impayee.delete');


//ibtissam
/**********************************fiche_patient************************************************************/
Route::resource('/Fiche_Patient', FichePatientController::class);
