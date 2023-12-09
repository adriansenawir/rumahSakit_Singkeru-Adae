<?php

// app/Models/Medicine.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = ['nama_obat', 'deskripsi', 'tipe_obat', 'stok'];
}
