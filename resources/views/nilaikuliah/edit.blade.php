@extends('layout.happy')
@section('content')

<div class="container my-5">
	<a href="/nilaikuliah"> <i class="fas fa-arrow-left"> </i></a>
    <br/>
	<br/>
    <h3> Edit Status </h3>
	<br/>

	@foreach($nilaikuliah as $n)
	<form action="/nilaikuliah/update" method="post" class="container-fluid">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label""></label>
        <div class="col-3">
		    <input type="hidden" name="id" class="form-control" value="{{ $n->ID }}">
        </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">NRP </label>
            <div class="col-3" id='nama'>
                <input type="number"name="nrp" class="form-control" value="{{ $n->NRP }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtpickerdemo" class="col-sm-2 col-form-label">Nilai Angka </label>
            <div class="col-3" id='stock'>
                <input type="number"name="nilai" class="form-control" value="{{ $n->NilaiAngka }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtpickerdemo" class="col-sm-2 col-form-label">SKS </label>
            <div class="col-3" id='stock'>
                <input type="number"name="sks" class="form-control" value="{{ $n->SKS }}">
            </div>
        </div>

        <div class="row mt-4 mb-5">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-3">
                <button type="submit" class=" form-control btn-success">Simpan Data</button>
            </div>
        </div>

	</form>
	@endforeach
</div>
@endsection

