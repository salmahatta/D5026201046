@extends('layout.happy')
@section('content')

    <div class="container my-5">
	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
	<br/>


        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Pegawai ID</th>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Nama Tugas</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
		@foreach($data as $p)
        <tbody>
		<tr>
			<td>{{ $p->pegawai_id }}</td>
			<td>{{ $p->id}}</td>
			<td>{{ $p->tanggal}}</td>
			<td>{{ $p->nama_tugas}}</td>
            <td>{{ $p->status}}</td>
			<td>
				<a href="/tugas/edit/{{ $p->id }}"><i class="fas fa-edit"></i></a>
				|
				<a href="/tugas/hapus/{{ $p->id }}"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>

</div>
@endsection
