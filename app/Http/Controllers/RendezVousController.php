<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    
    //ajouter
     public function index(){
         return view('RDV.creat');
     }

    //enregistrer
    public function save(Request $request){
     
        $RDV = new RendezVous();

        $RDV->nom_pat = $request['nom_patient'] ;
        $RDV->prenom_pat = $request['prenom_patient'] ;
        $RDV->tel_pat = $request['tel_patient'] ;
        $RDV->date =  $request['date']  ;
        $RDV->heure=$request['heure'];

        $RDV->save();
        return redirect::Route('listRDV');
    }

    //lister
    public function listRDV(Request $request){
        $RDV = new RendezVous();
        $listRDV = $RDV::all();

        return view("RDV.listRDV",['listR'=>$listRDV] );
    
    }

    //supprimer
    public function delete(Request $request){
        
        $RDV = new RendezVous();
        $id =  $request['id'];
        $RDV->find($id)->delete();
    
        return Redirect::route('listRDV')->with(['message'=> 'Successfully deleted!!']);
    }

    //modifier
    public function edit($id){
        $RDV=RendezVous::find($id);
        return view('RDV.edit')->with('RDV',$RDV);
    }
    
    public function update(Request $request ,$id){
        $RDV=RendezVous::where('id',$id)->first();
        $RDV->nom_pat=$request->nom_patient;
        $RDV->prenom_pat=$request->prenom_patient;
        $RDV->tel_pat=$request->tel_patient;
        $RDV->date=$request->date;
        $RDV->heure=$request->heure;
        
        $RDV->save(); 
        return redirect()->route('listRDV');
    }

}
