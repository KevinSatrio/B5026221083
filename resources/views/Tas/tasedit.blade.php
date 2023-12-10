@extends("Master/master")

@section("title", " Edit Data Pegawai")

@section("konten")

    @foreach($tas as $p)
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Edit Data Tas</h2>
            </div>
            <div class="card-body">
                <form action="/tasindex/update" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Merk:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->merktas }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-4 col-form-label">Stock:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->stocktas }}">
                        </div>
                    </div>

                    @if ($p->tersedia == 'y')
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="tersedia" class="col-form-label">Ketersediaan: </label>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check-inline">
                                <label class="form-check-label" for="tersedia">
                                    <input type="radio" class="form-check-input" id="tersedia" name="tersedia" value="y"
                                        checked>Tersedia
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label" for="tersedia">
                                    <input type="radio" class="form-check-input" id="tersedia" name="tersedia"
                                        value="n">Tidak
                                    Tersedia
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="/tasindex" class="btn btn-secondary ml-2">Kembali</a>
                        </div>
                    </div>
                    @endif

                    @if ($p->tersedia == 'n')
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="tersedia" class="col-form-label">Ketersediaan: </label>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check-inline">
                                <label class="form-check-label" for="tersedia">
                                    <input type="radio" class="form-check-input" id="tersedia" name="tersedia" value="y"
                                        >Tersedia
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label" for="tersedia">
                                    <input type="radio" class="form-check-input" id="tersedia" name="tersedia"
                                        value="n" checked>Tidak
                                    Tersedia
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-4">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="/tasindex" class="btn btn-secondary ml-2">Kembali</a>
                        </div>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    @endforeach

    @endsection
