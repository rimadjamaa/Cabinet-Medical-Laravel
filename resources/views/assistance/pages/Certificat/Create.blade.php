
@extends('nav_Med')
@section('content')
    

<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Certificats médicaux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container"> 
<h1>Formulaire  des Certificats</h1>

      
      <form action="{{ url('Certificat') }}" method="post">
        {!! csrf_field() !!}

        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Nom patient</label>
        <input type="text" name="nom_pat" id="nom_pat" class="form-control">
        </div>

        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Prénom patient</label>
        <input type="text" name="prenom_pat" id="prenom_pat" class="form-control">
        </div>

        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Nom medecin</label>
        <input type="text" name="nom_med" id="nom_med" class="form-control">
        </div>

        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Prénom medcin</label>
        <input type="text" name="prenom_med" id="prenom_med" class="form-control">
        </div>

        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">date</label>
        <input type="text" name="date" id="date" class="form-control">
       </div>

        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">heure</label>
        <input type="text" name="heure" id="heure" class="form-control">
        </div>

        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">durée</label>
        <input type="text" name="dure" id="dure" class="form-control">
        </div>
    
        <input type="submit" value="Save" class="btn btn-success">
    </form>

    
  
  </div>

  
</body>

</html>


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













