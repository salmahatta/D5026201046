@extends('layout.happy')
@section('content')
<body>
<div class="container my-5">
	<h3>Data Absen</h3>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
    <form class="mt-3" action="/absen/cari" method="GET">
        <div class="input-group">
        <div class="form-outline">
        <input type="search" name="cari" placeholder="ketik nama pegawai" class="form-control" value="{{ old('cari') }}">
        </div>
        <button id="search-button" type="submit" class="btn btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
    </form>
	<br/>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
            <th>No</th>
			<th>Nama</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
            </tr>
        </thead>
		@foreach($absen as $a)
        <tbody>
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
                <a href="/absen/detail/{{ $a->ID}}"><i class="fas fa-info-circle"></i></a>
                |
				<a href="/absen/edit/{{ $a->ID}}"><i class="fas fa-edit"></i></a>
				|
				<a href="/absen/hapus/{{ $a->ID}}"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
        </tbody>
		@endforeach
	</table>
    <br/>
    {{ $absen->links() }}
</div>
    @endsection
