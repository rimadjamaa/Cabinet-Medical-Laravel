
@extends('nav_Med')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
           <h1>Formulaire de depense</h1>
           </div>
           <div class="card-body">
               <form action="{{route('/updateD',$depenses->id)}}" method="get" enctype="multipart/form-data"> <!-- 'enctype' est important car il informe qu' on va envoyer un fichier--> 
               @csrf
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Mois de depense</label>
                   <input type="text" class="form-control" name="mois_dep"  value=" {{$depenses->mois_dep}}">
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Motif de depense</label>
                   <input type="text" class="form-control" name="motif_dep" value=" {{$depenses->motif_dep}}" >
               </div>
               <div class="mb-1">
                   <label for="exampleFormControlInput1" class="form-label">Montant de depense</label>
                   <input type="text" class="form-control" name="montant_dep" value=" {{$depenses->montant_dep}}" >
               </div>
               
              
               <div class="mb-1">
                   <input type="submit" value="Valider">
               </div>
               </form>
           
               </div>
           </div>
    </div>
@endsection

<style> 
body {
  font-family: Arial, Helvetica, sans-serif;
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





