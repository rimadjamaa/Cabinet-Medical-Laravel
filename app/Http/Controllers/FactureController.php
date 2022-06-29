<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /*-------ajouter Facture------- */
    public function index(){
        return view('facture.facture'); 
     }

    /*-------enregistrer facture------- */
    public function save(Request $request){
      
        $date =  $request['date'];
        $tarif_cns =  $request['tarif_cns'];
        $nom_pat =  $request['nom_pat'];
        $prenom_pat =  $request['prenom_pat'];
        
        $facture = new Facture();

        $facture->date = $date ;
        $facture->tarif_cns = $tarif_cns ;
        $facture->nom_pat = $nom_pat ;
        $facture->prenom_pat = $prenom_pat ;
       
        $facture->save();
        return redirect::Route('listFactures');
    }

    /*-------lister factures------- */
    public function listFactures(){
        $facture = new Facture();
        $listFactures = $facture::all();

        return view("facture.listFactures",['listF'=>$listFactures] );
    }

    /*-------supprimer factures------- */
    public function delete(Request $request){

        $id =  $request['id'];
        $facture = new Facture();
        $facture->find($id)->delete();
    
        return Redirect::route('listFactures')->with(['message','Successfully deleted!!']);
    }


     /*-------modifier facture------- */
     public function edit($id){
        $factures=Facture::find($id);
        return view('facture.edit')->with('factures',$factures);
     }

     public function update(Request $request ,$id){
        $facture=Facture::where('id',$id)->first();
        $facture->date=$request->date;
        $facture->tarif_cns=$request->tarif_cns;
        $facture->nom_pat=$request->nom_pat;
        $facture->prenom_pat=$request->prenom_pat;

        $facture->save(); 
        return redirect()->route('listFactures');
    }

    
    /*-------afficher depenses------- */
    public function show($id)
    {
        $factures = Facture::where('id',$id)->first();
        return view('facture.show')->with('factures', $factures);
    }

    //   public function show(Request $request ){
       
    //      $date =  $request['date'];
    //      $tarif_cns =  $request['tarif_cns'];
    //      $nom_pat =  $request['nom_pat'];
    //      $prenom_pat =  $request['prenom_pat'];
        
    //      return view("facture.show" ,['date'=>$date  , 'tarif_cns'=>$tarif_cns , 'nom_pat'=>$nom_pat ,  'prenom_pat'=>$prenom_pat]);
    //   }



}
