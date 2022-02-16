<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terlambat extends Model
{
    use HasFactory;
    protected $table = 'terlambat';
    protected $fillable = ['id_user', 'tanggal', 'alasan'];
}
