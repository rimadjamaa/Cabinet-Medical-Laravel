<?php

namespace App\Http\Controllers;
use  App\Models\Fiche_Examen;
use  App\Models\Patient;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * 
     * 
     * @return Response
     */
    public function index()
    {
        $fiche_examens =  Fiche_Examen::all();
      return view ('Fiche_Examen.index')->with('fiche_examens', $fiche_examens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     * @return Response
     */
    public function create()
    {
        return view('Fiche_Examen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        $fiche_examens = new Fiche_Examen;
        $fiche_examens->date_examen=$request->input('date_examen');
        $fiche_examens->resultat=$request->input('resultat');
        $fiche_examens->save(); 
       
           return redirect()->route('Fiche_Examen.index');
        
    }

    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fiche_examens=Fiche_Examen::find($id)->delete();
        return redirect()->route('Fiche_Examen.index');
    }

    public function edit($id)
    {
        $fiche_examens = Fiche_Examen::find($id);
        return view('Fiche_Examen.edit')->with('fiche_examens', $fiche_examens);
    }

    public function update(Request $request, $id)
    {
        
        $fiche_examens = Fiche_Examen::find($id);
        $fiche_examens->date_examen=$request->input('date_examen');
        $fiche_examens->resultat=$request->input('resultat');
        $fiche_examens->save(); 
        return redirect()->route('Fiche_Examen.index');
    }
    public function show($id)
    {
        $fiche_examens = Fiche_Examen::find($id);
        return view('Fiche_Examen.show')->with('fiche_examens', $fiche_examens);
    }
}
