<?php
/////*************************************************Ordonnance**************************** */
namespace App\Http\Controllers;
use App\Models\Ordonnance;

use App\Http\Requests\OrdonnanceRequest;
class OrdonnanceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       // $Ordonnance = Ordonnance::where('id',$id)->first();
        return view('Ordonnance.crudOrdonnance');/*->with([
            'Ordonnance'=> $Ordonnance
        ]);*/
    }
    public function list()
    {
        $Ordonnances =Ordonnance::all();
        return view('Ordonnance.crudOrdonnance',compact('Ordonnances'));
    }
    public function show($id){ 
   
        $Ordonnance=Ordonnance::where('id',$id)->first();// ??????????????? s'affiche pas 
          return view('Ordonnance.Ordonnance')->with([
          'Ordonnance' => $Ordonnance
          ]);
        }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('Ordonnance.Create_Ord');
    }

    
    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Ordonnance=Ordonnance::find($id)->delete();
        return redirect()->route('Ordonnance.index');
    }

    public function store(OrdonnanceRequest $request){
        
        $ligneOrdonnance=new Ordonnance();
        $ligneOrdonnance->nom_pat=$request->nom_pat;
        $ligneOrdonnance->prenom_pat=$request->prenom_pat;
        $ligneOrdonnance->nom_med=$request->nom_med;
        $ligneOrdonnance->prenom_med=$request->prenom_med;                   
        $ligneOrdonnance->date=$request->date;
        $ligneOrdonnance->description=$request->description;
        $ligneOrdonnance->save();
        
           return redirect()->route('Ordonnance.index');
        
        }
         
      
        public function edit($id)
    {
        $Ordonnance = Ordonnance::find($id);
        return view('Ordonnance.Modify_Ord',compact('Ordonnance'));
    }
    public function update(OrdonnanceRequest $request, $id)
    {   
        
        $ligneOrdonnance=Ordonnance::where('id',$id)->first();
    
        $ligneOrdonnance->nom_pat=$request->nom_pat;
        $ligneOrdonnance->prenom_pat=$request->prenom_pat;
        $ligneOrdonnance->nom_med=$request->nom_med;
        $ligneOrdonnance->prenom_med=$request->prenom_med;                   
        $ligneOrdonnance->date=$request->date;
        $ligneOrdonnance->description=$request->description;
        $ligneOrdonnance->save();
        return redirect()->route('Ordonnance.index');
    }
}