<?php
/***************Mutuelle****************/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FicheMut;

class MutuelleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $fiche_muts = FicheMut::all();
      return view ('FicheMut.index')->with('fiche_muts', $fiche_muts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       
        return view('FicheMut.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $fiche_muts = new FicheMut;
        $fiche_muts->nom_pat=$request->input('nom_pat');
        $fiche_muts->prenom_pat=$request->input('prenom_pat');
        $fiche_muts->nom_med=$request->input('nom_med');
        $fiche_muts->prenom_med=$request->input('prenom_med');
        $fiche_muts->date_soins=$request->input('date_soins');
        $fiche_muts->code_mut=$request->input('code_mut');
        $fiche_muts->montant_total=$request->input('montant_total');
        $fiche_muts->montant_mut=$request->input('montant_mut');
        $fiche_muts->save(); 
       
           return redirect()->route('FicheMut.index');
        
           
    }

    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $FicheMut=FicheMut::find($id)->delete();
        return redirect()->route('FicheMut.index');
    }

    public function edit($id)
    {
        $fiche_muts = FicheMut::find($id);
        return view('FicheMut.edit')->with('fiche_muts', $fiche_muts);
    }

    public function update(Request $request, $id)
    {

        
        $fiche_muts = FicheMut::find($id);
        $fiche_muts->nom_pat=$request->input('nom_pat');
        $fiche_muts->prenom_pat=$request->input('prenom_pat');
        $fiche_muts->nom_med=$request->input('nom_med');
        $fiche_muts->prenom_med=$request->input('prenom_med');                   
        $fiche_muts->date_soins=$request->input('date_soins');
        $fiche_muts->code_mut=$request->input('code_mut');
        $fiche_muts->montant_total=$request->input('montant_total');
        $fiche_muts->montant_mut=$request->input('montant_mut');

        $fiche_muts->save(); 
        return redirect()->route('FicheMut.index');
    }
    public function show($id)
    {
        $fiche_muts = FicheMut::find($id);
        return view('FicheMut.show')->with('fiche_muts', $fiche_muts);
    }


       
    
}

