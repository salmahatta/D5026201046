@extends('layout.happy')
@section('content')
    <div class="container my-5">

        <a href="/tugas"> <i class="fas fa-arrow-left"> </i> </a>
        <br/>
        <br/>
        <h3>Edit Tugas</h3>
        <br/>

	<form action="/tugas/update/" method="post" class="container-fluid">
		{{ csrf_field() }}
        <div>
            <input type="hidden" class="form-control" required="required" name="id" value="{{ $tugas->ID }}">
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"">Nama Pegawai </label>
                    <div class="col-3">
                        <select class="form-control" name="nama_pegawai">
                            @foreach($pegawai as $p )
                            <option value="{{ $p->pegawai_id }}"{{$p->pegawai_id == $tugas->IDPegawai?"selected":null}}> {{ $p->pegawai_nama }}</option>
                            @endforeach
                        </select>
                    </div>
            </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-3">
		<input type="datetime-local" class="form-control" required="required" name="Tanggal" value="{{ date('Y-m-d\TH:i', strtotime($tugas->Tanggal)) }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nama Tugas</label>
        <div class="col-3">
		<input type="text" class="form-control" required="required" name="NamaTugas" value="{{ $tugas->NamaTugas }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-3">
        <select class="form-control" name="Status" required="required">
            <option value=0 {{$tugas->Status==="Belum selesai"?"selected":null}}>Belum selesai</option>
            <option value=1 {{$tugas->Status==="Selesai"?"selected":null}}>Selesai</option>
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
