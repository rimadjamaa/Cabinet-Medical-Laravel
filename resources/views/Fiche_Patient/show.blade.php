

        
  
        <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body >

<div class="container-fluid mb-5 ">
   <div id='sectionAimprimer'>
  <div class="container-fluid mt-5 mb-5">
 
    <div class="row border border-dark ">
      
    <p class="card-title">Nom patient : {{ $fiche_patients->nom_pat }}</p>
        <p class="card-text">Prénom patient : {{ $fiche_patients-> prenom_pat}}</p>
        <p class="card-text">Date de Naissance : {{ $fiche_patients->date_naiss }}</p>
        <p class="card-text">Sexe : {{ $fiche_patients-> sexe}}</p>
        <p class="card-text">Adresse : {{ $fiche_patients->adresse }}</p>
        <p class="card-text">Tél : {{ $fiche_patients-> telephone}}</p>
        <p class="card-text">Groupe de Sang : {{ $fiche_patients-> group_sang}}</p>      
                            
                            

    </div>  

  </div>
  </div>
  <button type="button"  class="btn btn-warning btn-lg float-sm-end" id="load2" style="color:white;" data-loading-text=" Processing Order"><i class='fa fa-spinner fa-spin text-light '></i><a href="#" onClick="imprimer('sectionAimprimer')" class="btn btn-sm ms-2">Imprimer</a>
  <script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>

</div>
</button>
</body>
</html>




</style>
    
  </div>
</div>    