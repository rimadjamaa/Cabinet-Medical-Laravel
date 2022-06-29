<?php
/**************************FichePatient**********************************/
namespace App\Http\Controllers;
use App\Models\Fiche_Patient;
use Illuminate\Http\Request;

class FichePatientController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $fiche_patients = Fiche_Patient::all();
        return view ('Fiche_Patient.index')->with('fiche_patients', $fiche_patients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       /* $Fiche_Patient*/
        $fiche_patients = new Fiche_Patient;
        return view('Fiche_Patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
       /* $fiche_patients = $this->appointmentFromRequest($request);
        $fiche_patients->save();
       
           return redirect()->route('Fiche_Patient.index');*/

        $fiche_patients = new Fiche_Patient;
        $fiche_patients->nom_pat=$request->input('nom_pat');
        $fiche_patients->prenom_pat=$request->input('prenom_pat');
        $fiche_patients->date_naiss=$request->input('date_naiss');
        $fiche_patients->sexe=$request->input('sexe');
        $fiche_patients->adresse=$request->input('adresse');
        $fiche_patients->telephone=$request->input('telephone');
        $fiche_patients->group_sang=$request->input('group_sang');
        $fiche_patients->save(); 
       
           return redirect()->route('Fiche_Patient.index');
        
           
    }

    /**
     * Delete a resource in storage.
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fiche_patients=Fiche_Patient::find($id)->delete();
        return redirect()->route('Fiche_Patient.index');
    }

    public function edit($id)
    {
        $fiche_patients = Fiche_Patient::find($id);
        return view('Fiche_Patient.edit')->with('fiche_patients', $fiche_patients);
    }

    public function update(Request $request, $id)
    {
        
        $fiche_patients = Fiche_Patient::find($id);
        $fiche_patients->nom_pat=$request->input('nom_pat');
        $fiche_patients->prenom_pat=$request->input('prenom_pat');
        $fiche_patients->date_naiss=$request->input('date_naiss');
        $fiche_patients->sexe=$request->input('sexe');
        $fiche_patients->adresse=$request->input('adresse');
        $fiche_patients->telephone=$request->input('telephone');
        $fiche_patients->group_sang=$request->input('group_sang');
        $fiche_patients->save(); 
        return redirect()->route('Fiche_Patient.index');
        
    }

    private function FicheFromRequest(Request $request)
    {
        $this->validate($request, $this->validInputConditions);
        $newFiche_Patient = new Fiche_Patient;

        $newFiche_Patient->nom_pat = $request->input('nom_pat');
        $newFiche_Patient->prenom_pat = $request->input('prenom_pat');
        $newFiche_Patient->cate_naiss = $request->input('date_naiss');
        $newFiche_Patient->sexe = $request->input('sexe');
        $newFiche_Patient->adresse = $request->input('adresse');
        $newFiche_Patient->telephone = $request->input('telephone');
        $newFiche_Patient->group_sang = $request->input('group_sang');

       
    }

    public function show($id)
    {
        $fiche_patients = Fiche_Patient::find($id);
        return view('Fiche_Patient.show')->with('fiche_patients', $fiche_patients);
    }
}
