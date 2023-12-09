<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'nama_tabel_anda';
    
    protected $fillable = ['username', 'email', 'password', 'role'];
}
