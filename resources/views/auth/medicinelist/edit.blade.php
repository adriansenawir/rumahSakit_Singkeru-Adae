<!-- resources/views/auth/medicinelist/edit.blade.php -->

@extends('layouts.app_pharmacist')

@section('content')
    <style>
        body {
            background-color: #829EC2;
        }
    </style>
    <div class="container mt-5">
        <h2>Edit Obat</h2>

        <!-- Formulir Edit Obat -->
        <form action="{{ route('medicinelist.update', ['medicineId' => $medicine->id]) }}" method="POST" class="mb-3">
            @csrf
            @method('put')
            <div class="row">
                <!-- Sertakan kolom input yang diperlukan untuk mengedit obat -->
                <!-- Sebagai contoh: -->
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nama_obat" value="{{ $medicine->nama_obat }}" required>
                </div>
                <div class="col-md-4">
                    <textarea class="form-control" name="deskripsi" required>{{ $medicine->deskripsi }}</textarea>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="tipe_obat" required>
                        <option value="keras" {{ $medicine->tipe_obat === 'keras' ? 'selected' : '' }}>Keras</option>
                        <option value="biasa" {{ $medicine->tipe_obat === 'biasa' ? 'selected' : '' }}>Biasa</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn1 btn-primary">Perbarui Obat</button>
                </div>
            </div>
        </form>
    </div>
@endsection
