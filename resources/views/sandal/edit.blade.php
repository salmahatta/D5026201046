@extends('layout.happy')
@section('content')

<div class="container my-5">
	<a href="/sandal"> <i class="fas fa-arrow-left"> </i></a>
    <br/>
	<br/>
    <h3> Edit Status </h3>
	<br/>

	@foreach($sandal as $s)
	<form action="/sandal/update" method="post" class="container-fluid">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label""></label>
        <div class="col-3">
		    <input type="hidden" name="id" class="form-control" value="{{ $s->kodesandal }}">
        </div>
        </div>

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Merk Sandal </label>
            <div class="col-3" id='nama'>
                <input type="text"name="merk" class="form-control" value="{{ $s->merksandal }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="dtpickerdemo" class="col-sm-2 col-form-label">Stock Sandal </label>
            <div class="col-3" id='stock'>
                <input type="number"name="stock" class="form-control" value="{{ $s->stocksandal }}">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Status</label>
            <div class="col-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="T" @if($s->tersedia==='T') checked="checked" @endif>
                <label class="form-check-label" for="h">
                    Tersedia
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tersedia" id="kosong" value="K" @if($s->tersedia==='K') checked="checked" @endif>
                <label class="form-check-label" for="a">
                    Kosong
                </label>
              </div>
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

