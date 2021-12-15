@extends('layout.happy')
@section('content')
    <div class="container my-5">
        <h3>Nilai Kuliah</h3>
	<a href="/nilaikuliah/tambah"> + Tambah Nilai Baru</a>

	<br/>
    <br/>
    <table class="table table-striped">
        <thead class="table-dark">
		<tr>
            <th>No</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
            <th>Opsi</th>
		</tr>
        </thead>
		@foreach($nilaikuliah as $n)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                <?php
                    if($n->NilaiAngka <=40){
                        echo "D";
                    } elseif ($n->NilaiAngka >=41 && $n->NilaiAngka <=60) {
                        echo "C";
                    } elseif ($n->NilaiAngka >=61 && $n->NilaiAngka <=80) {
                        echo "B";
                    } else{
                        echo "A";
                    }
                    ?>
            </td>
            <td>
                <?php
                    $bobot = $n->NilaiAngka * $n->SKS;
                    echo $bobot;
                    ?>
            </td>
			<td>
				<a href="/nilaikuliah/edit/{{ $n->ID }}"><i class="fas fa-edit"></i></a>
				|
				<a href="/nilaikuliah/hapus/{{ $n->ID }}"><i class="fas fa-trash-alt"></i></a>
			</td>
		</tr>
    </tbody>
		@endforeach
	</table>
    <br/>
    {{ $nilaikuliah->links() }}
</div>
@endsection
