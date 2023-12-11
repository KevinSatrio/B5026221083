@extends("Master/master")

@section("title", "Database Chat")

@section("konten")

<h3>Database Pesan</h3>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>Isi Chat</th>
            <th>Chat</th>
		</tr>
		@foreach($chat as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->pesan }}</td>
            <td><a href="/chatindex/view/{{ $p->id }}" class="btn btn-primary">View</a></td>
		</tr>
		@endforeach
	</table>

<h6>Klik link "CHAT" pada dropdown link untuk mengkonversi ke emoticon!</h6>

@endsection
