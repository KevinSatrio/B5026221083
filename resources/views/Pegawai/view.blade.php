@extends('Master/master')

@section('title', 'Data Pegawai')

@section('konten')

    @foreach ($pegawai as $p)
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
        <div class="container mt-4">
            <div class="card-header">
                <h1 class="text-center card-title">Data Pegawai</h1>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                    <div class="card">

                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nama:</strong> {{ $p->pegawai_nama }}</li>
                                <li class="list-group-item"><strong>Jabatan:</strong> {{ $p->pegawai_jabatan }}</li>
                                <li class="list-group-item"><strong>Umur:</strong> {{ $p->pegawai_umur }}</li>
                                <li class="list-group-item"><strong>Alamat:</strong> {{ $p->pegawai_alamat}}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="/pegawai" class="btn btn-primary">OK</a> <!-- Centered button -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    @endforeach


@endsection
