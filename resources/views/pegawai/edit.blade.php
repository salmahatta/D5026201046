@extends('layout.happy')
@section('content')
    <div class="container my-5">

        <a href="/pegawai"> <i class="fas fa-arrow-left"> </i> </a>
        <br/>
        <br/>
        <h3>Edit Pegawai</h3>
        <br/>


	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="container-fluid">
		{{ csrf_field() }}
        <div class="row mb-3">
		<input type="hidden" class="form-control" name="id" value="{{ $p->pegawai_id }}">
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-3">
		<input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-3">
		<input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Umur</label>
        <div class="col-3">
		<input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}"">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-3">
        <textarea class="form-control" name="alamat" required="required">
            {{ $p->pegawai_alamat }}
        </textarea>
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
