@extends('layout.happy')
@section('content')
    <div class="container my-5">
        <h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

    <table class="table table-striped">
        <thead class="table-dark">
		<tr>
            <th>ID</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
        </thead>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $p->pegawai_id }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}"><i class="fas fa-edit"></i></a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>

</div>
@endsection
