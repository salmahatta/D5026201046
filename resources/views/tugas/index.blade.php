<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
	<title>Tugas</title>
</head>
<body>
    <div class="container my-5">
	<h3>Tabel Tugas</h3>

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
				<a href="/tugas/edit/{{ $p->id }}">Edit </a>
				|
				<a href="/tugas/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>

</div>
</body>
</html>
