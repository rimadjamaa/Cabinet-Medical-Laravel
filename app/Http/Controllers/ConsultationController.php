<?php
/*****************************Consultation***************************/
namespace App\Http\Controllers;
use  App\Models\Consultation;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultationRequest;


class ConsultationController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $AllConsu = Consultation::orderBy('id', 'ASC')->get();
        return response()->view('Consultation.index', array('Consu' => $AllConsu));
    }
    public function list()
    {
        $Consultation =Consultation::all();
        return view('Consultation.crudCons',compact('Consultation'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       
        return view('Consultation.Create_Cons');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ConsultationRequest $request)
    {
        
        $Consultation = new Consultation();
        $Consultation->nom_pat=$request->nom_pat;
        $Consultation->prenom_pat=$request->prenom_pat;
        $Consultation->nom_med=$request->nom_med;
        $Consultation->prenom_med=$request->prenom_med;
        $Consultation->motif=$request->motif;
        $Consultation->pois=$request->pois;
        $Consultation->taille=$request->taille;
        $Consultation->tension=$request->tension;
        $Consultation->temperatur=$request->temperatur;
        $Consultation->examen=$request->examen;
        $Consultation->conclusion=$request->conclusion;
        $Consultation->date=$request->date;
        $Consultation->heure=$request->heure;
        $Consultation->save(); 
       
           return redirect()->route('Consultation.index');
        
       
    }

    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $Consultation=Consultation::find($id)->delete();
        return redirect()->route('Consultation.index');
    }

    public function edit($id)
    {
        $Consultation = Consultation::find($id);
        return view('Consultation.Modify_Cons',compact('Consultation'));
    }

    public function update(ConsultationRequest $request, $id)
    {
        
        $Consultation = Consultation::find($id);
        $Consultation->nom_pat=$request->nom_pat;
        $Consultation->prenom_pat=$request->prenom_pat;
        $Consultation->nom_med=$request->nom_med;
        $Consultation->prenom_med=$request->prenom_med;
        $Consultation->motif=$request->motif;
        $Consultation->pois=$request->pois;
        $Consultation->taille=$request->taille;
        $Consultation->tension=$request->tension;
        $Consultation->temperatur=$request->temperatur;
        $Consultation->examen=$request->examen;
        $Consultation->conclusion=$request->conclusion;
        $Consultation->date=$request->date;
        $Consultation->heure=$request->heure;
        $Consultation->save(); 
        return redirect()->route('Consultation.index');
    }
}
