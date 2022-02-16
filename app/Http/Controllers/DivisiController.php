<?php

namespace App\Http\Controllers;
use App\Models\Divisi;
use App\Models\User;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function create()
    {
        $divisi = Divisi::all();
        return view('users.create', compact('divisi'));
    }
}
