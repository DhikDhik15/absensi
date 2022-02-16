<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = ['id_user', 'tanggal1', 'tanggal2', 'alasan'];
    use HasFactory;
}
