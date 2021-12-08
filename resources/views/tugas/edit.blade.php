@extends('layout.happy')
@section('content')
    <div class="container my-5">

        <a href="/tugas"> <i class="fas fa-arrow-left"> </i> </a>
        <br/>
        <br/>
        <h3>Edit Tugas</h3>
        <br/>

	<form action="/tugas/update/{{$tugas->id}}" method="post" class="container-fluid">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"">Pegawai ID</label>
        <div class="col-3">
		<input type="number" class="form-control" name="pegawai_id" value="{{ $tugas->pegawai_id }}">
        </div>
        </div>
        <div>
		<input type="hidden" class="form-control" required="required" name="id" value="{{ $tugas->id }}">
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-3">
		<input type="datetime-local" class="form-control" required="required" name="tanggal" value="{{ date('Y-m-d\TH:i', strtotime($tugas->Tanggal)) }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Tugas</label>
        <div class="col-3">
		<input type="text" class="form-control" required="required" name="nama_tugas" value="{{ $tugas->nama_tugas }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-3">
        <select class="form-control" name="status" required="required">
            <option value=0 {{$tugas->status==="Belum selesai"?"selected":null}}>Belum selesai</option>
            <option value=1 {{$tugas->status==="Selesai"?"selected":null}}>Selesai</option>
        </select>
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
