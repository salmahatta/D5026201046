@extends('layout.happy')
@section('content')

<div class="container my-5">
	<a href="/sandal"> <i class="fas fa-arrow-left"> </i></a>
    <br/>
	<br/>
    <h3> Data Sandal </h3>
	<br/>

	<table class="table table-striped">
        <thead>
            <tr>
                <td>Merk Sandal</td>
                <td>:</td>
                <td>{{ $sandal->merksandal }}</td>
            </tr>
            <tr>
                <td>Stock</td>
                <td>:</td>
                <td>{{ $sandal->stocksandal }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>{{$sandal->tersedia}}</td>
            </tr>
        </thead>
    </table>
@endsection

