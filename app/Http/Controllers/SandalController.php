<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SandalController extends Controller
{
    public function index()
    {
        $sandal = DB::table('sandal')->paginate(5);
        return view('sandal.index', ['sandal' => $sandal]);
    }

    // method untuk menampilkan view form tambah sandal
    public function tambah()
    {

        // memanggil view tambah
        $sandal = DB::table('sandal')->get();
        return view('sandal.tambah', compact('sandal'));
    }

    // method untuk insert data ke table sandal
    public function store(Request $request)
    {
        // insert data ke table sandal
        DB::table('sandal')->insert([
            'merksandal' => $request->merk,
            'stocksandal' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman sandal
        return redirect('/sandal');
    }
    // method untuk cari data sandal
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $sandal = DB::table('sandal')
            ->where('merksandal', 'like', "%" . $cari . "%")
            ->paginate();
        return view('sandal.index', ['sandal' => $sandal]);
    }
    // method untuk edit data sandal
    public function edit($id)
    {
        // mengambil data sandal berdasarkan id yang dipilih
        $sandal = DB::table('sandal')->where('kodesandal', $id)->get();
        return view('sandal.edit', ['sandal' => $sandal]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data sandal
        DB::table('sandal')->where('kodesandal', $request->id)->update([
            'merksandal' => $request->merk,
            'stocksandal' => $request->stock,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman awal
        return redirect('/sandal');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('sandal')->where('kodesandal', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/sandal');
    }
    public function detail($id)
    {
        $sandal = DB::table('sandal')->where('kodesandal', $id)->first();
        return view('sandal.detail', compact('sandal'));
    }
}
