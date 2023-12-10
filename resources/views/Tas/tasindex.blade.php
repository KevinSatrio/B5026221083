@extends('Master/master')

@section('title', 'Tas')

@section('konten')

    <h3>Daftar Tas</h3>

    <a href="/tasindex/tambahdatatas" class="btn btn-primary"> + Tambah Data Tas</a> <br> <br />
    <p>Cari Data Pegawai :</p>
    <form action="/tasindex/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Tas .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <br>
        <input class="btn btn-primary "type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Merk Tas</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Action</th>
        </tr>
        @foreach ($tas as $p)
            <tr>
                <td>{{ $p->kodetas }}</td>
                <td>{{ $p->merktas }}</td>
                <td>{{ $p->stocktas }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/tasindex/view/{{ $p->kodetas }}" class="btn btn-primary">View</a>
                    |
                    <a href="/tasindex/edit/{{ $p->kodetas }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/tasindex/hapus/{{ $p->kodetas }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
