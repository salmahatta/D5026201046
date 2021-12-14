@extends('layout.happy')
@section('content')

    <div class="container my-5">
	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<br/>
    <form class="mt-3" action="/tugas/cari" method="GET">
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
                    <th>Nama Tugas</th>
                    <th>Status</th>
                    <th>Opsi</th>
                </tr>
            </thead>
		@foreach($tugas as $p)
        <tbody>
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal}}</td>
			<td>{{ $p->NamaTugas}}</td>
            <td>{{$p->Status == 1 ? "Selesai":"Belum Selesai"}}</td>
			<td>
                <a href="/tugas/detail/{{ $p->ID }}"><i class="fas fa-info-circle"></i></a>
                |
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
