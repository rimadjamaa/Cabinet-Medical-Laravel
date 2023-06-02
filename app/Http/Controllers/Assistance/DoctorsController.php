<?php

namespace App\Http\Controllers\Assistance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medcin;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Medcin::all();
        return view('assistance.pages.doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assistance.pages.doctors.create');
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
            'category' => 'required|string',
            'email' => 'required|email',
        ]);

        // Create a new patient instance with the validated data
        $doctor = new Medcin();
        $doctor->name = $validatedData['name'];
        $doctor->category = $validatedData['category'];
        $doctor->email = $validatedData['email'];
        
        // Save the doctor to the database
        $doctor->save();

        // Redirect to the appropriate page or route
        return redirect()->route('assistance.doctors.index')->with('success', 'Medcin created successfully');
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
        $doctor = Medcin::findOrFail($id); // Find the patient by ID
        
        // Perform any necessary checks or validation before deleting the patient
        
        $doctor->delete(); // Delete the patient

        // Optionally, you can return a response or redirect
        return redirect()->route('assistance.doctors.index')->with('success', 'Medcin deleted successfully');
    }
}
