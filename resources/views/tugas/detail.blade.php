@extends('layout.happy')
@section('content')

<div class="container my-5">
	<a href="/tugas"> <i class="fas fa-arrow-left"> </i></a>
    <br/>
	<br/>
    <h3> Data Absen </h3>
	<br/>

	<table class="table table-striped">
        <thead>
            <tr>
                <td>Nama Pegawai</td>
                <td>:</td>
                <td>{{ $tugas->pegawai_nama }}</td>
            </tr>
            <tr>
                <td>Nama Tugas</td>
                <td>:</td>
                <td>{{ $tugas->NamaTugas }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{{$tugas->Status == 1 ? "Selesai":"Belum Selesai"}}</td>
            </tr>
        </thead>
    </table>
@endsection
