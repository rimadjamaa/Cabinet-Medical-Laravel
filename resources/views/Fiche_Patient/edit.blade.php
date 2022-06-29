@extends('nav_Med')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Fiches  Patients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container">
<h1>Formulaire Gestion Des Fiches Patients</h1>
      
      <form action="{{ url('Fiche_Patient/' .$fiche_patients->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$fiche_patients->id}}" id="id" />
        <label>Nom patient</label></br>
        <input type="text" name="nom_pat" id="nom_pat" value="{{$fiche_patients->nom_pat}}" class="form-control"></br>
        <label>Prénom patient</label></br>
        <input type="text" name="prenom_pat" id="prenom_pat" value="{{$fiche_patients->prenom_pat}}" class="form-control"></br>
        <label>Date de naissance</label></br>
        <input type="text" name="date_naiss" id="date_naiss" value="{{$fiche_patients->date_naiss}}" class="form-control"></br>
        <label>Sexe</label></br>
        <input type="text" name="sexe" id="sexe" value="{{$fiche_patients->sexe}}" class="form-control"></br>
        
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$fiche_patients->adresse}}" class="form-control"></br>
        <label>Tél</label></br>
        <input type="text" name="telephone" id="telephone" value="{{$fiche_patients->telephone}}" class="form-control"></br>
        <label>Groupe de Sang</label></br>
        <input type="text" name="group_sang" id="group_sang" value="{{$fiche_patients->group_sang}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
  @endsection

  
</body>
<style> 
      body {font-family: Arial, Helvetica, sans-serif;
        padding: 0px;}
      
      input[type=text], textarea, input[type=text] {
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
      
      .container {
        /* Ajouter box-sizing */
        box-sizing : border-box;
        border-radius:5px;
        background-color:#a8caec;
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

</html>