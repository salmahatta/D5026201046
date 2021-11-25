<?php

namespace App\Http\Controllers;

use App\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tugas::all();
        return view("tugas.index", compact(["data"])); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tugas.tambah"); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tugas::insert([
            'pegawai_id' => $request->pegawai_id,
            'id' => $request->id,
            'tanggal' => $request->tanggal,
            'nama_tugas' => $request->nama_tugas,
        ]); //
        return redirect('/tugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        Tugas::find($id)->delete();
        return redirect('/tugas'); //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tugas = Tugas::find($id);
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.edit', ['tugas' => $tugas]); //
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
        Tugas::find($id)->update([
            'pegawai_id' => $request->pegawai_id,
            'id' => $request->id,
            'tanggal' => $request->tanggal,
            'nama_tugas' => $request->nama_tugas,
            'status' => $request->status,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas'); //
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
