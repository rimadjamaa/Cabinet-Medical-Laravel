<?php

namespace App\Http\Controllers\Assistance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rendez_vous;
use App\Models\Medcin;
use App\Models\Patient;

class RDVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rdvs=Rendez_vous::all();
        return view('assistance.pages.RDV.index',compact('rdvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients=Patient::all();
        $medcins=Medcin::all();
        return view('assistance.pages.RDV.create',compact('patients','medcins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'medcin_id' => 'required',
        'patient_id' => 'required',
        'date' => 'required',
        'time' => 'required',
        'duration' => 'required',
        'location' => 'required',
        'status' => 'required',
    ]);

    $rendezvous = new Rendez_vous();
    $rendezvous->medcin_id = $request->input('medcin_id');
    $rendezvous->patient_id = $request->input('patient_id');
    $rendezvous->date = $request->input('date');
    $rendezvous->time = $request->input('time');
    $rendezvous->duration = $request->input('duration');
    $rendezvous->location = $request->input('location');
    $rendezvous->status = $request->input('status');
    $rendezvous->save();

    // Redirect or return a response
    return redirect()->route('assistance.RDV.index')->with('success', 'Rendezvous created successfully.');
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
        $rdv = Rendez_vous::findOrFail($id); // Find the patient by ID
        
        // Perform any necessary checks or validation before deleting the patient
        
        $rdv->delete(); // Delete the patient

        // Optionally, you can return a response or redirect
        return redirect()->route('assistance.RDV.index')->with('success', 'Medcin deleted successfully');
    }
}
