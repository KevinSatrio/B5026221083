@extends("Master/master")

@section("title", " Edit Data Pegawai")

@section("konten")

    @foreach($pegawai as $p)
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Edit Data Pegawai</h2>
            </div>
            <div class="card-body">
                <form action="/pegawai/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama" class="col-sm-3 col-form-label">Nama:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="umur" class="col-sm-3 col-form-label">Umur:</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-3 col-form-label">Alamat:</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="alamat" name="alamat" value="{{ $p->pegawai_alamat }}" rows="3" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="/pegawai" class="btn btn-secondary ml-2">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    @endsection
