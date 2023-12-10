@extends('Master/master')

@section('title', 'Tambah Data Tas')

@section('konten')
<div class="container mt-5">

    <div class="card">
        <div class="card-header">

            <h3>Tambah Data Tas</h3>

        </div>

        <br />
        <br />
        <div class="card-body">
            <form action="/tasindex/store" method="post" class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="merktas" class="col-sm-4 col-form-label">Merk Tas: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="merktas" name="merktas">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="stocktas" class="col-sm-4 col-form-label">Stok Tas: </label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="stocktas" name="stocktas">
                    </div>
                </div>

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
                        <input class="btn btn-success" type="submit" value="Simpan Data">
                        <a href="/tasindex" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
