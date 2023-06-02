@extends('backend.layouts.app')

@section('content')
<br>
<br>
    <div class="container">
        <h1>Create Rendez-vous</h1>
        <form action="{{ route('assistance.RDV.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="medcin_id">Medcin:</label>
                <select name="medcin_id" id="medcin_id" class="form-control">
                <option value="">--- Select Medcin ---</option>
                    @foreach($medcins as $medcin)
                        <option value="{{ $medcin->id }}">{{ $medcin->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="patient_id">Patient:</label>
                <select name="patient_id" id="patient_id" class="form-control">
                <option value="">--- Select Patient ---</option>
                    @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" name="time" id="time" class="form-control">
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="time" name="duration" id="duration" class="form-control">
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" name="location" id="location" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" class="form-control">
                    <option value="done">Done</option>
                    <option value="pending">Pending</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <br>
    <br>
@endsection
