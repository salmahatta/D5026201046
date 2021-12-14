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

        $tugas = DB::table('tugas')->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('tugas.*', 'pegawai_nama')->paginate(5);
        return view("tugas.index", ['tugas' => $tugas]); //
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $tugas = DB::table('tugas')
            ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')->select('tugas.*', 'pegawai.pegawai_nama')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();
        // mengirim data pegawai ke view index
        return view('tugas.index', ['tugas' => $tugas]);
    }
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
        $pegawai = DB::table('pegawai')->orderBy("pegawai_nama", "asc")->get();
        $tugas = DB::table('tugas')->where('ID', $id)->first();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('tugas.edit', ['tugas' => $tugas, 'pegawai' => $pegawai]); //
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
            'IDPegawai' => $request->nama_pegawai,
            'Tanggal' => $request->Tanggal,
            'NamaTugas' => $request->NamaTugas,
            'Status' => $request->Status,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/tugas'); //
    }

    public function detail($id)
    {
        $tugas = DB::table('tugas')->where('ID', $id)->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')->select('tugas.*', 'pegawai.pegawai_nama')->first();
        return view('tugas.detail', compact('tugas'));
    }
}
