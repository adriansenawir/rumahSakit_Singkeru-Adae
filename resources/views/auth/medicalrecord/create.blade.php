<!-- resources/views/medicalrecord/create.blade.php -->

@extends('layouts.app_doctor')

@section('content')
    <h1>Create Medical Record</h1>

    <form method="POST" action="/medicalrecord">
        @csrf

        <div class="form-group">
            <label for="patient_id">Patient:</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->username }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="medical_history">Medical History:</label>
            <textarea name="medical_history" id="medical_history" class="form-control" rows="5" required></textarea>
        </div>

        <!-- Add other fields as needed -->

        <button type="submit" class="btn btn-primary">Create Medical Record</button>
    </form>
@endsection
