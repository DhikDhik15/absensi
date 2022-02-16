<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutis = Cuti::latest()->get();
        return view('page.pengajuan', compact('cutis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('page.pengajuan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
           'tanggal1' => 'required|date',
            'tanggal2' => 'required|date',
           'alasan' => 'required|string',
       ]);

       $cuti = Cuti::create([
           'id_user' => auth()->user()->id,
           'tanggal1' => $request->tanggal1,
            'tanggal2' => $request->tanggal2,
           'alasan' => $request->alasan,
       ]);

       if ($cuti) {
           return redirect()
           ->route('pengajuan.index')
           ->with(['success', 'Pengajuan Cuti Berhasil']);
       } else {
           return redirect()
           ->route('pengajuan.index')
           ->with(['error', 'Pengajuan Cuti Gagal']);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
