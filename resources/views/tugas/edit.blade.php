<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tugas</title>
</head>
<body>
    <div class="container my-5">

	<h3>Edit Tugas</h3>

    <a href="/tugas"> Kembali</a>
	<br/>
	<br/>

	<form action="/tugas/update/{{$tugas->id}}" method="post" class="container-fluid">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label"">Pegawai ID</label>
        <div class="col-3">
		<input type="number" class="form-control" name="pegawai_id" value="{{ $tugas->pegawai_id }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">ID</label>
        <div class="col-3">
		<input type="number" class="form-control" required="required" name="id" value="{{ $tugas->id }}">
        </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-3">
		<input type="datetime" class="form-control" required="required" name="tanggal" value="{{ $tugas->tanggal }}">
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
</body>
</html>
