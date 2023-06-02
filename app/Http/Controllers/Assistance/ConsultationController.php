<?php

namespace App\Http\Controllers\Assistance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medcin;
use App\Models\Patient;
use App\Models\Consultation;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $consultations=Consultation::all();
       return view('assistance.pages.consultation.index',compact('consultations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients=Patient::all();
        $doctors=Medcin::all();
        return view('assistance.pages.consultation.create',compact('patients','doctors'));
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
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'date' => 'required|date',
            'diagnostic' => 'required',
            'prescription' => 'required',
            'description' => 'required',
            'status' => 'required|in:donne,pennding',
            
        ]);

        // Create a new consultation using the validated data
        $consultation = new Consultation();
        $consultation->patient_id = $validatedData['patient_id'];
        $consultation->medcin_id = $validatedData['doctor_id'];
        $consultation->date = $validatedData['date'];
        $consultation->diagnostic = $validatedData['diagnostic'];
        $consultation->prescription = $validatedData['prescription'];
        $consultation->description = $validatedData['description'];
        $consultation->status = $validatedData['status'];

        // Save the consultation to the database
        $consultation->save();

        // Redirect to the index page with a success message
        return redirect()->route('assistance.consultation.index')->with('success', 'Consultation created successfully');
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
        $consultation = Consultation::findOrFail($id); // Find the patient by ID
        
        // Perform any necessary checks or validation before deleting the patient
        
        $consultation->delete(); // Delete the patient

        // Optionally, you can return a response or redirect
        return redirect()->route('assistance.consultation.index')->with('success', 'Consultation deleted successfully');
    }
}
