<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    //{
    public function index()
    {
        // mengambil data dari table nilaikuliah
        //$nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);
        // mengirim data nilaikuliah ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {

        // memanggil view tambah
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.tambah', compact(['nilaikuliah']));
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai,
            'SKS' => $request->sks
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }

    // method untuk edit data nilaikuliah
    public function edit($id)
    {
        // mengambil data nilaikuliah berdasarkan id yang dipilih
        $nilaikuliah = DB::table('nilaikuliah')->where('ID', $id)->get();
        // passing data nilaikuliah yang didapat ke view edit.blade.php
        return view('nilaikuliah.edit', compact(['nilaikuliah']));
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data nilaikuliah
        DB::table('nilaikuliah')->where('ID', $request->id)->update([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai,
            'SKS' => $request->sks
        ]);
        // alihkan halaman ke halaman awal
        return redirect('/nilaikuliah');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('nilaikuliah')->where('ID', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/nilaikuliah');
    }
}
