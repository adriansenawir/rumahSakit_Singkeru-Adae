<?php

// File: app/Models/MedicalRecord.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;

class MedicalRecord extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'medical_history'];

    public function doctorCanCreate()
    {
        return Gate::allows('create', MedicalRecord::class);
    }

    public function doctorCanUpdate()
    {
        return Gate::allows('update', $this);
    }

    public function doctorCanDelete()
    {
        return Gate::allows('delete', $this);
    }

}

