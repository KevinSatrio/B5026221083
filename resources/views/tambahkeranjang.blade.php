@extends('master')

@section('title', 'Tambah Keranjang')

@section('konten')

    <h3>Tambah Keranjang</h3>

    <a href="/keranjangindex" class="btn btn-primary">Kembali</a>

    <br />
    <br />

    <form action="/keranjangindex/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-4 col-form-label">Kode Barang: </label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>

        <div class="form-group row">
            <label for="Jumlah" class="col-sm-4 col-form-label">Jumlah Pembelian: </label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>

        <div class="form-group row">
            <label for="Harga" class="col-sm-4 col-form-label">Harga Barang: </label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="Harga" name="Harga">
            </div>
        </div>



        <div class="form-group row">
            <div class="col-sm-8 offset-sm-4">
                <input class="btn btn-success" type="submit" value="Simpan Data">
            </div>
        </div>
    </form>

@endsection
