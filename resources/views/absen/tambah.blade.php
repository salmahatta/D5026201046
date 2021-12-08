@extends('layout.happy')
@section('content')
<div class="container my-5">

    <a href="/absen"> <i class="fas fa-arrow-left"> </i> </a>
    <br/>
    <br/>
    <h3>Tambah Absen</h3>
    <br/>

    <form action="/absen/store" method="post" class="container-fluid">
        {{ csrf_field() }}
        <div class="row mb-3">
        <label class="col-sm-2 col-form-label"">Nama Pegawai </label>
            <div class="col-3">
                <select class="form-control" name="idpegawai">
                    @foreach($pegawai as $p )
                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mb-3">
        <label for="dtpickerdemo" class="col-sm-2 col-form-label">Tanggal </label>
            <div class="col-3">
            <input type="datetime-local" class="form-control" name="tanggal" required>
            </div>
        </div>


        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Status</label>
            <div class="col-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="h" value="H" required>
                <label class="form-check-label" for="h">
                    Hadir
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="a" value="A" checked required>
                <label class="form-check-label" for="a">
                    Tidak Hadir
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
</div>
@endsection
