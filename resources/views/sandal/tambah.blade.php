@extends('layout.happy')
@section('content')
<div class="container my-5">

    <a href="/sandal"> <i class="fas fa-arrow-left"> </i> </a>
    <br/>
    <br/>
    <h3>Tambah Sandal</h3>
    <br/>

    <form action="/sandal/store" method="post" class="container-fluid">
        {{ csrf_field() }}
        <div class="row mb-3">
        <label class="col-sm-2 col-form-label"">Merk Sandal</label>
            <div class="col-3">
            <input type="text" class="form-control" name="merk" required>
            </div>
        </div>

        <div class="row mb-3">
        <label for="dtpickerdemo" class="col-sm-2 col-form-label">Stock Sandal </label>
            <div class="col-3">
            <input type="number" class="form-control" name="stock" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Status</label>
            <div class="col-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tersedia" id="tersedia" value="T" required>
                <label class="form-check-label" for="h">
                    Tersedia
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tersedia" id="kosong" value="K" checked required>
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
</div>
@endsection
