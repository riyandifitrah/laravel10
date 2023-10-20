<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jtrain extends Model
{
    protected $table="jtrains";
    protected $fillable=["jenis","keterangan",];
    use HasFactory;
}
