<?php

namespace App\Http\Controllers\Assistance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;

class PationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pations=Patient::all();
       return view('assistance.pages.pations.index',compact('pations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assistance.pages.pations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'maladie' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'sexe' => 'required|in:Male,Female',
        ]);

        // Create a new patient instance with the validated data
        $patient = new Patient();
        $patient->name = $validatedData['name'];
        $patient->Familyname = $validatedData['username'];
        $patient->maladie = $validatedData['maladie'];
        $patient->email = $validatedData['email'];
        $patient->sexe = $validatedData['sexe'];
        
        // Save the patient to the database
        $patient->save();

        // Redirect to the appropriate page or route
        return redirect()->route('assistance.pations.index')->with('success', 'Patient created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::findOrFail($id); // Find the patient by ID
        
        // Perform any necessary checks or validation before deleting the patient
        
        $patient->delete(); // Delete the patient

        // Optionally, you can return a response or redirect
        return redirect()->route('assistance.pations.index')->with('success', 'Patient deleted successfully');
    }
}
