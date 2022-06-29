

@extends('nav_Med')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facture</title>
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
      <div  class="col-sm bg-white float-start  p-4 ps-5 pe-0" style=" color:white;"><h3>Cabinet Medical </h3><br />
                                                 
                           </div>
      <div  class="col-sm bg-white float-end fs-6 p-5 pe-5 ps-0">
                            <h3 class="fs-6 text-black-50">885 Rue Nour</h3>  
                            <h3 class="fs-6 text-black-50">Meknes Ouislan</h3>
                            <h3 class="fs-6 text-black-50">Tel:05.78.45.94.76</h3>
                            <h3 class="fs-6 text-black-50">Tel:06.98.23.91.86</h3>
                            </div>
                             <br>
                             <p class="card-title">Date :       {{ $depense->mois_dep }}</p>
                             <p class="card-text">Nom du patient :  {{ $depense->motif_dep}}</p>
                            <p class="card-text">Prenom du patient :   {{ $depense->montant_dep}}</p>
                            
                           

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


@endsection

</style>
</body>
</html>