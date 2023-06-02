@extends('backend.layouts.app')

@section('content')
<br>
    <div class="container">
        <h1>Create Consultation</h1>

        <form action="{{ route('assistance.consultation.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="patient_id">Patient:</label>
                <select name="patient_id" id="patient_id" class="form-control">
                    <option value="">--- Selecte Patient ---</option>
                    @foreach ($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="doctor_id">Doctor:</label>
                <select name="doctor_id" id="doctor_id" class="form-control">
                    <option value="">--- Selecte Medcin ---</option>
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="">--- Select Status ---</option>
                    <option value="donne">Donne</option>
                    <option value="pennding">Pending</option>
                </select>
            </div>

            <div class="form-group">
                <label for="diagnostic">diagnostic:</label>
                <textarea name="diagnostic" id="diagnostic" class="form-control"></textarea>
            </div>

        
            <div class="form-group">
                <label for="prescription">Prescription:</label>
                <textarea name="prescription" id="prescription" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Create Consultation</button>
        </form>
    </div>
    <br>
@endsection
