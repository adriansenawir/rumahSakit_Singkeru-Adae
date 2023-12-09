<!-- resources/views/medicalrecord/index.blade.php -->

@extends('layouts.app_doctor')

@section('content')
<style>
    body{
        background-color: #829EC2; 
    }
</style>
    <h1>Medical Records of Each Patient</h1>

    @if(auth()->user()->role == 'Dokter')
        <div class="mb-3">
            @if (auth()->user()->can('create', \App\Models\MedicalRecord::class))
                <a href="{{ route('medicalrecord.create') }}" class="btn btn-success">Create</a>
            @endif
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Riwayat Penyakit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($medicalRecords as $record)
                    <tr>
                        <td>{{ $patientUsernames[$record->id] }}</td>
                        <td>{{ $record->medical_history }}</td>
                        <td>
                            {{-- Tambahkan tombol untuk mengedit dan menghapus --}}
                            @if ($record->doctorCanUpdate())
                                <a href="{{ route('medicalrecord.edit', $record) }}" class="btn btn-primary">Edit</a>
                            @endif
                            @if ($record->doctorCanDelete())
                                <form action="{{ route('medicalrecord.destroy', $record) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Tidak ada riwayat penyakit pasien.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    @else
        <p>Anda tidak memiliki izin untuk melihat riwayat penyakit pasien.</p>
    @endif
@endsection
