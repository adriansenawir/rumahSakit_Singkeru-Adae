<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use App\Models\User;
use App\Models\Patient;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function index()
    {
        $data = [];
    
        // Retrieve medical records based on user role
        if (auth()->user()->role == 'Dokter') {
            // For Dokter, retrieve medical records of patients
            $medicalRecords = MedicalRecord::all();

            $patientUsernames = [];
            foreach ($medicalRecords as $medical) {
                $patient = User::where('id', $medical->patient_id)->first();
                $patientUsernames[$medical->id] = $patient->username;
            }

            $data['medicalRecords'] = $medicalRecords;
            $data['patientUsernames'] = $patientUsernames;
        } elseif (auth()->user()->role == 'Pasien') {
            // For Pasien, retrieve their own medical records
            $medicalRecords = MedicalRecord::where('patient_id', auth()->user()->id)->get();
            $data['medicalRecords'] = $medicalRecords;
        }

        return view('auth.medicalrecord.index', $data);
    }
    

    // public function create()
    // {
    //     // Cek izin untuk membuat catatan medis baru
    //     $this->authorize('create', MedicalRecord::class);

    //     // Logika untuk halaman create
    //     return view('medicalrecord.create');
    // }

    // MedicalRecordController.php
    public function create()
    {
        // Cek izin untuk membuat catatan medis baru
        $this->authorize('create', MedicalRecord::class);

        // Ambil data pasien
        $patients = User::where('role','Pasien')->get(); // Sesuaikan dengan model dan kolom yang sesuai

        // Logika untuk halaman create
        return view('auth.medicalrecord.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'medical_history' => 'required|string',
        ]);

        $input = $request->all();
        MedicalRecord::create([
            'patient_id' => $input['patient_id'],
            'medical_history' => $input['medical_history'],
        ]);

        return redirect()->route('medicalrecord.index')->with('success', 'Medical record created successfully');
    }

    public function edit(MedicalRecord $record)
    {
        // Cek izin untuk mengedit
        $this->authorize('update', $record);
        $data = MedicalRecord::all();

        // Logika untuk halaman edit
        // ...

        return view('auth.medicalrecord.edit', compact('record', 'data'));
    }

    public function update(Request $request, MedicalRecord $record)
    {
        // Cek izin untuk mengupdate
        $this->authorize('update', $record);

        // Logika untuk melakukan update
        // ...

        return redirect()->route('auth.medicalrecord.index');
    }

    public function destroy(MedicalRecord $record)
    {
        // Cek izin untuk menghapus
        $this->authorize('delete', $record);

        // Logika untuk menghapus
        $record->delete();

        return redirect()->route('auth.edicalrecord.index');
    }
}
