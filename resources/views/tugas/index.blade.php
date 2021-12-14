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
                    <th>No</th>
                    <th>ID Pegawai</th>
                    <th>Tanggal</th>
                    <th>Nama Tugas</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
		@foreach($tugas as $p)
        <tbody>
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Tanggal}}</td>
			<td>{{ $p->NamaTugas}}</td>
            <td>{{$p->Status == 1 ? "Selesai":"Belum Selesai"}}</td>
			<td>
				<a href="/tugas/edit/{{ $p->ID }}"><i class="fas fa-edit"></i></a>
				|
				<a href="/tugas/hapus/{{ $p->ID }}"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>
    {{ $tugas->links() }}
</div>
@endsection
