<!-- resources/views/medicalrecord/edit.blade.php -->

@extends('layouts.app_doctor')

@section('content')
    <h1>Edit Medical Record</h1>

    <form action="{{ route('medicalrecord.update', $record) }}" method="POST">
        @csrf
        @method('PUT')
        
        {{-- Tambahkan formulir pengeditan sesuai kebutuhan --}}
        {{-- Contoh: --}}
        <label for="medical_history">Riwayat Penyakit:</label>
        <input type="text" name="medical_history" value="{{ $record->medical_history }}" required>

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
