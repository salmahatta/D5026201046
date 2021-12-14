@extends('layout.happy')
@section('content')

<div class="container my-5">
	<a href="/absen"> <i class="fas fa-arrow-left"> </i></a>
    <br/>
	<br/>
    <h3> Data Absen </h3>
	<br/>

	<table class="table table-striped">
        <thead>
            <tr>
                <td>ID Pegawai</td>
                <td>:</td>
                <td>{{ $absen->ID }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $absen->IDPegawai }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{{$absen->Status}}</td>
            </tr>
        </thead>
    </table>
@endsection
