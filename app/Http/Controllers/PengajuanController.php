<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Izin;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $izins = Izin::latest()->get();
        return view('page.pengajuan', compact('izins'));
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
            'tanggal' => 'required|date',
            'alasan' => 'required|string',
        ]);

        $izin = Izin::create([
            'id_user' => auth()->user()->id,
            'tanggal' => $request->tanggal,
            'alasan' => $request->alasan,
        ]);

        if ($izin) {
            return redirect()
            ->route('pengajuan.index')
            ->with(['success', 'Pengajuan Izin Berhasil']);
        } else {
            return redirect()
            ->route('pengajuan.index')
            ->with(['error', 'Pengajuan Izin Gagal']);
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
