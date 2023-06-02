
<!DOCTYPE html>
<html>
<head>
    <title>Gestion des Certificats médicaux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
<div class="container">
<h1>Formulaire Gestion des Certificats</h1>

      
      <form action="{{ url('Certificat/' .$certificats->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$certificats->id}}" id="id" />
        <label>Nom patient</label></br>
        <input type="text" name="nom_pat" id="nom_pat" value="{{$certificats->nom_pat}}" class="form-control"></br>
        <label>Prénom patient</label></br>
        <input type="text" name="prenom_pat" id="prenom_pat" value="{{$certificats->prenom_pat}}" class="form-control"></br>
        <label>Nom medecin</label></br>
        <input type="text" name="nom_med" id="nom_med" value="{{$certificats->nom_med}}" class="form-control"></br>
        <label>Prénom medecin</label></br>
        <input type="text" name="prenom_med" id="prenom_med" value="{{$certificats->prenom_med}}" class="form-control"></br>
        
        <label>Date</label></br>
        <input type="text" name="date" id="date" value="{{$certificats->date}}" class="form-control"></br>
        <label>heure</label></br>
        <input type="text" name="heure" id="heure" value="{{$certificats->heure}}" class="form-control"></br>
        <label>Durée</label></br>
        <input type="text" name="dure" id="dure" value="{{$certificats->dure}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
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
