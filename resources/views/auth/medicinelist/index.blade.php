@extends('layouts.app_pharmacist')

@section('content')
<style>
    body {
        background-color: #829EC2;
    }
</style>
<div class="container mt-5">
    <h2>Medicine List</h2>

    <!-- Formulir Pencarian dan Filter -->
    <form action="{{ route('medicinelist.index') }}" method="GET" class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" name="search" placeholder="Search by name">
            </div>
            <div class="col-md-3">
                <select class="form-control" name="filter">
                    <option value="">Select Status</option>
                    <option value="in_stock">In Stock</option>
                    <option value="out_of_stock">Out of Stock</option>
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Search & Filter</button>
            </div>
        </div>
    </form>

    <!-- Formulir Tambah Obat -->
        <a href="{{ route('medicinelist.create') }}" class="btn1 btn btn-primary">Tambah</a>

    <!-- Daftar Obat -->
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medicines as $medicine)
            <tr>
                <td>{{ $medicine->nama_obat }}</td>
                <td>{{ $medicine->tipe_obat }}</td>
                <td>
                    <a href="{{ route('medicinelist.edit', ['medicineId' => $medicine->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('medicinelist.destroy', ['medicineId' => $medicine->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this medicine?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
