<!-- resources/views/auth/medicinelist/create.blade.php -->

@extends('layouts.app_pharmacist')

@section('content')
    <div class="container mt-5">
        <h2>Add Medicine</h2>

        <form action="/medicinelist" method="POST" class="mb-3">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat" required>
                </div>
                <div class="col-md-4">
                    <input type="number" class="form-control" name="stok" placeholder="Stok" required>
                </div>
                <div class="col-md-4">
                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi" required></textarea>
                </div>
                <div class="col-md-2">
                    <select class="form-control" name="tipe_obat" required>
                        <option value="keras">Keras</option>
                        <option value="biasa">Biasa</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn1 btn-primary">Tambah Obat</button>
                </div>
            </div>
        </form>

        <a href="{{ route('medicinelist.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
