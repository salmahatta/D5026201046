@extends('layout.happy')
@section('content')
    <div class="container my-5">
        <h3>Data Pegawai</h3>
	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
    <form class="mt-3" action="/pegawai/cari" method="GET">
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
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
        </thead>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
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
    <br/>
    {{ $pegawai->links() }}
</div>
@endsection
