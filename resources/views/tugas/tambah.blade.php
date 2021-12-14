@extends('layout.happy')
@section('content')
    <div class="container my-5">

        <a href="/tugas"> <i class="fas fa-arrow-left"> </i> </a>
        <br/>
        <br/>
        <h3>Tambah Tugas</h3>
        <br/>

	<form action="/tugas/store" method="post" class="container-fluid">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"">Nama Pegawai </label>
                <div class="col-3">
                    <select class="form-control" name="nama_pegawai">
                        @foreach($pegawai as $p )
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-3">
		<input type="datetime-local" class="form-control" required="required" name="tanggal" >
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Tugas</label>
        <div class="col-3">
		<input type="text" class="form-control" required="required" name="nama_tugas" >
        </div>
        </div>
        <div class="row mt-4 mb-5">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-3">
                <button type="submit" class=" form-control btn-success">Simpan Data</button>
            </div>
        </div>
	</form>
    </div>
@endsection
