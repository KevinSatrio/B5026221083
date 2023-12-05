@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    @foreach ($pegawai as $p)
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
        <div class="container">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    
                </div>
            </div>
        </div>
    @endforeach









@endsection
