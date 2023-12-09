<?php

// File: app/Policies/MedicalRecordPolicy.php

namespace App\Policies;

use App\Models\User;
use App\Models\MedicalRecord;
use Illuminate\Auth\Access\HandlesAuthorization;

class MedicalRecordPolicy
{
    use HandlesAuthorization;

    public function view(User $user, MedicalRecord $medicalRecord)
    {
        // Pasien hanya dapat melihat riwayat medisnya sendiri
        return $user->id === $medicalRecord->patient_id && $user->role === 'Pasien';
    }

    public function create(User $user)
    {
        // Kebijakan untuk membuat riwayat medis
        // Bisa diimplementasikan sesuai dengan aturan bisnis
        return $user->role === 'Dokter';
    }

    public function update(User $user, MedicalRecord $medicalRecord)
    {
        // Dokter hanya dapat mengedit riwayat medis yang dia buat
        return $user->id === $medicalRecord->doctor_id && $user->role === 'Dokter';
    }

    public function delete(User $user, MedicalRecord $medicalRecord)
    {
        // Hanya dokter yang dapat menghapus riwayat medis
        return $user->id === $medicalRecord->doctor_id && $user->role === 'Dokter';
    }

}
