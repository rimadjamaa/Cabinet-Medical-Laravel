@extends('nav_Med')
@section('content')
<div class=" mt-5 container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-6 col-lg-8">
<div class="mx-3 me-5 ">
@if($errors->any())
<div class="alert alert-danger col-8 offset-2">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card">
           <div class="card-header">
           <h1>Formulaire des Consultations</h1>
           </div>
           <div class="card-body">
               <form action="{{route('Consultation.update',$Consultation->id)}}" method="post" enctype="multipart/form-data"> <!-- 'enctype' est important car il informe qu' on va envoyer un fichier--> 
               @method('PUT')
               @csrf
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Nom du patient</label>
                   <input type="text" class="form-control" name="nom_pat" placeholder="Entrez le nom du patient" value="{{$Consultation->nom_pat}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Prenom du patient</label>
                   <input type="text" class="form-control" name="prenom_pat"  value="{{$Consultation->prenom_pat}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Nom du medcin</label>
                   <input type="text" class="form-control" name="nom_med" placeholder="Entrez le nom du patient" value="{{$Consultation->nom_med}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Prenom du medcin</label>
                   <input type="text" class="form-control" name="prenom_med"  value="{{$Consultation->prenom_med}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">motif</label>
                   <input type="text" class="form-control" name="motif" value="{{$Consultation->motif}} ">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">taille</label>
                   <input type="text" class="form-control" name="taille" value="{{$Consultation->taille}} ">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">pois</label>
                   <input type="text" class="form-control" name="pois" value="{{$Consultation->pois}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">tension</label>
                   <input type="text" class="form-control" name="tension" value="{{$Consultation->tension}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">temperatur</label>
                   <input type="text" class="form-control" name="temperatur" value="{{$Consultation->temperatur}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">examen</label>
                   <input type="text" class="form-control" name="examen" value="{{$Consultation->examen}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">conclusion</label>
                   <input type="text" class="form-control" name="conclusion" value="{{$Consultation->conclusion}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">date</label>
                   <input type="date" class="form-control" name="date" value="{{$Consultation->date}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">heure</label>
                   <input type="text" class="form-control" name="heure" value="{{$Consultation->heure}}">
               </div>
             
                   <input type="submit" value="Modifier">
               </div>
               </form>
           
               </div>
           </div>
    </div>
@endsection
<style>
   
body {font-family: Arial, Helvetica, sans-serif;
  padding: 0px;}

input[type=text], textarea, input[type=date] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  margin-right: 0px;
  margin-left: 0px;
  resize: vertical;
}
label{margin-right: 0px;
  margin-left: 0px;
  width: 100%;
  color:white;
  font-family: serif;}

input[type=submit] {
  background-color: #1255a2;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #1872D9;
}
li{
  text-decoration:none;
  color:white;
}

.container {
  /* Ajouter box-sizing */
  box-sizing : border-box;
  border-radius:5px;
  background-color:#1E90FF;
  padding:20px;
  width: 100%;
  /* redéfinition 400 + 2*20 */
  max-width: 900px;
  margin:0 auto;
}
h1  {
  color: white;
  width: 100%;
}
</style>