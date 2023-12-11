@extends('Master/master')

@section('title', 'Konversi Emoticon')

@section('konten')

    @foreach ($chat as $p)
        <input type="hidden" name="id" value="{{ $p->id }}"> <br />
        <div class="container mt-4">
            <div class="card-header">
                <h1 class="text-center card-title">Konversi Emoticon</h1>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12">

                    <div class="card">

                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">    {!! $p->pesan !!}</li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="/chatindex" class="btn btn-primary">OK</a> <!-- Centered button -->
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
