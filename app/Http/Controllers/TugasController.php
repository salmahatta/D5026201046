<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data = Tugas::all();
        $tugas = DB::table('tugas')->paginate(5);
        return view("tugas.index", ['tugas' => $tugas]); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai = DB::table('pegawai')->orderBy("pegawai_nama", "asc")->get();
        return view('tugas.tambah', compact(['pegawai'])); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('tugas')->insert([
            'IDPegawai' => $request->nama_pegawai,
            'Tanggal' => $request->tanggal,
            'NamaTugas' => $request->nama_tugas,
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
        DB::table('tugas')->where("ID", $id)->delete();
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
        // $tugas = DB::find($id);
        $tugas = DB::table('tugas')->where('ID', $id)->first();
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
    public function update(Request $request)
    {
        DB::table('tugas')->where('ID', $request->id)->update([
            'IDPegawai' => $request->IDPegawai,
            'ID' => $request->ID,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status,
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
