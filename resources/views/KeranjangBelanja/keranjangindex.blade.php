@extends("Master/master")

@section("title", "Keranjang")

@section("konten")

<h3>Isi Keranjang</h3>

<a href="/keranjangindex/tambahkeranjang" class="btn btn-primary"> Beli</a> <br> <br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjang as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ $p->Harga }}</td>
            <td>{{ $p->Total }}</td>
            <td>
                <a href="/keranjangindex/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
            </td>
		</tr>
		@endforeach
	</table>

@endsection
