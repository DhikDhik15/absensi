<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenMasuk extends Model
{
    protected $table = 'absen_masuk';
    protected $fillable = ['id_user'];
    use HasFactory;
}
