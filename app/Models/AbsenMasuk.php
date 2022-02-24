<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AbsenMasuk extends Model
{
    protected $table = 'absen_masuk';
    protected $fillable = ['id_user'];
    use HasFactory;

    public function user()
    {
        return $this->hasOne('User', 'foreign_key','id_user')
        ->where('id_user', Auth::user()->getId());
    }
}
