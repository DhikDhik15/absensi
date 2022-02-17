<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenPulang extends Model
{
    protected $table = 'absen_pulang';
    protected $fillable = ['id_user'];
    use HasFactory;
}
