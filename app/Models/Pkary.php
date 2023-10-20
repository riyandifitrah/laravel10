<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkary extends Model
{   
    protected $table = "pkaries";
    protected $fillable = [
        'nip',
        'nama_karyawan',
        'jabatan',
    ];
    use HasFactory;
}
