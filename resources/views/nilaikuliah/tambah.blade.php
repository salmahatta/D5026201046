@extends('layout.happy')
@section('content')
<div class="container my-5">

    <a href="/nilaikuliah"> <i class="fas fa-arrow-left"> </i> </a>
    <br/>
    <br/>
    <h3>Tambah Nilai</h3>
    <br/>

    <form action="/nilaikuliah/store" method="post" class="container-fluid">
        {{ csrf_field() }}
        <div class="row mb-3">
        <label class="col-sm-2 col-form-label"">NRP</label>
            <div class="col-3">
            <input type="number" class="form-control" name="nrp" required>
            </div>
        </div>

        <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Nilai Angka </label>
            <div class="col-3">
            <input type="number" class="form-control" name="nilai" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">SKS </label>
                <div class="col-3">
                <input type="number" class="form-control" name="sks" required>
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
