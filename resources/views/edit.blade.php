@extends("master")

@section("title", " Edit Data Pegawai")

@section("konten")

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label for="nama" class="col-xs-3 col-form-label mr-2 control-label">Nama</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-xs-3 col-form-label mr-2 control-label">Jabatan</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-xs-3 col-form-label mr-2 control-label">Umur</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-xs-3 col-form-label mr-2 control-label">Alamat</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $p->pegawai_alamat }}">
            </div>
        </div>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection
