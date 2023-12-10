@extends('Master/master')

@section('title', 'Tambah Data Nilai')

@section('konten')

<div class="container mt-5">

    <div class="card">
        <div class="card-header">

            <h3>Tambah Data</h3>



        </div>

        <br />
        <br />


        <div class="card-body">

            <form action="/nilaikuliah/store" method="post" class="form-horizontal">
                {{ csrf_field() }}

                <div class="form-group row">
                    <label for="NRP" class="col-sm-3 col-form-label">NRP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="NRP" name="NRP">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="NilaiAngka" class="col-sm-3 col-form-label">Nilai</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="SKS" class="col-sm-3 col-form-label">SKS</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="SKS" name="SKS">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                        <input class="btn btn-success" type="submit" value="Simpan Data">
                        <a href="/nilaikuliah" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
