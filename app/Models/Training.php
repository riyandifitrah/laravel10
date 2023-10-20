<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'trainings';
    protected $fillable = [
        "keterangan",
        "nip",
        "jenis",
        "tgl_sertif",
    ];
    use HasFactory;
}
