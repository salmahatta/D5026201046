<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaikuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table nilaikuliah
        //$nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);
        // mengirim data nilaikuliah ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $nilaikuliah = DB::table('nilaikuliah')
            ->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')->select('nilaikuliah.*', 'pegawai.pegawai_nama')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }
    // method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {

        // memanggil view tambah
        $niilaikuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.tambah', compact(['nilaikuliah']));
    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');
    }

    // method untuk edit data nilaikuliah
    public function edit($id)
    {
        // mengambil data nilaikuliah berdasarkan id yang dipilih
        $nilaikuliah = DB::table('nilaikuliah')->where('ID', $id)->get();
        $pegawai = DB::table('pegawai')->orderBy("pegawai_nama", "asc")->get();
        // passing data nilaikuliah yang didapat ke view edit.blade.php
        return view('nilaikuliah.edit', compact(['pegawai', 'nilaikuliah']));
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data nilaikuliah
        DB::table('nilaikuliah')->where('ID', $request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->tanggal,
            'Status' => $request->status
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
    public function detail($id)
    {
        $nilaikuliah = DB::table('nilaikuliah')->where('ID', $id)->join('pegawai', 'IDPegawai', '=', 'pegawai.pegawai_id')->select('nilaikuliah.*', 'pegawai.pegawai_nama')->first();
        return view('nilaikuliah.detail', compact('nilaikuliah'));
    }
}
