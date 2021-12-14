@extends('layout.happy')
@section('content')
<div class="container my-5">
	<h3>Data Sandal</h3>

	<a href="/sandal/tambah"> + Tambah Sandal Baru</a>

	<br/>
    <form class="mt-3" action="/sandal/cari" method="GET">
        <div class="input-group">
        <div class="form-outline">
        <input type="search" name="cari" placeholder="ketik merk sandal" class="form-control" value="{{ old('cari') }}">
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
			<th>Merk Sandal</th>
			<th>Status</th>
			<th>Opsi</th>
            </tr>
        </thead>
		@foreach($sandal as $s)
        <tbody>
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $s->merksandal }}</td>
			<td>{{ $s->tersedia }}</td>
			<td>
                <a href="/sandal/detail/{{ $s->kodesandal }}"><i class="fas fa-info-circle"></i></a>
                |
				<a href="/sandal/edit/{{ $s->kodesandal}}"><i class="fas fa-edit"></i></a>
				|
				<a href="/sandal/hapus/{{ $s->kodesandal}}"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
        </tbody>
		@endforeach
	</table>
    <br/>
    {{ $sandal->links() }}
</div>
    @endsection
