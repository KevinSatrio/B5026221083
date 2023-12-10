@extends("master")

@section("title", "Tas")

@section("konten")

<h3>Daftar Tas</h3>

<a href="/tasindex/tambahdatatas" class="btn btn-primary"> + Tambah Data Tas</a> <br> <br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>ID</th>
			<th>Merk Tas</th>
			<th>Stock</th>
			<th>Ketersediaan</th>
		</tr>
		@foreach($tas as $p)
		<tr>
			<td>{{ $p->kodetas }}</td>
			<td>{{ $p->merktas }}</td>
			<td>{{ $p->stocktas }}</td>
			<td>{{ $p->tersedia }}</td>

		</tr>
		@endforeach
	</table>

@endsection
