@extends('nav_Med')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Fiches Examen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container">
<h1>Formulaire Gestion des Fiches Examen</h1>
  
      
      <form action="{{ url('Fiche_Examen') }}" method="post">
        {!! csrf_field() !!}

        


        
        
        <label>Date d'examen</label></br>
        <input type="text" name="date_examen" id="date_examen" class="form-control"></br>
        <label>Résultat</label></br>
        <input type="text" name="resultat" id="resultat" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

    
  
  </div>

  
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
@endsection