@extends('layout.happy')
@section('content')
<body>
<div class="container my-5">
	<h3>Data Absen</h3>

	<a href="/absen/tambah"> + Tambah Absen Baru</a>

	<br/>
	<br/>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
            </tr>
        </thead>
		@foreach($absen as $a)
        <tbody>
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}"><i class="fas fa-edit"></i></a>
				|
				<a href="/absen/hapus/{{ $a->ID}}"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
        </tbody>
		@endforeach
	</table>

</div>
</body>
</html>
    @endsection
