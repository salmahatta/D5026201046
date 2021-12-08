@extends('layout.happy')
@section('content')
    <div class="container my-5">
        <a href="/pegawai"> <i class="fas fa-arrow-left"> </i> </a>
        <br/>
        <br/>
        <h3>Tambah Pegawai</h3>
        <br/>
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"">Nama</label>
        <div class="col-3">
		<input type="text" class="form-control" name="nama">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-3">
		<input type="text" class="form-control" required="required" name="jabatan" >
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Umur</label>
        <div class="col-3">
		<input type="number" class="form-control" required="required" name="umur" >
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-3">
		<textarea class="form-control" required="required" name="alamat" ></textarea>
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

