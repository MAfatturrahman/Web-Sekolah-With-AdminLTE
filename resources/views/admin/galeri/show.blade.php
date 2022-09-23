@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="my_card_galeri_show">
            <h4 class="card-header text-primary">{{ $galeri->judul }}</h4>
            <div class="card-body">
                <img class="w-100 h-100" src="{{ $galeri->foto }}">
                <p class="mt-2">{{ $galeri->deskripsi }}</p>
            </div>
            <a class="btn btn-primary" href="{{ url('galeri') }}">Back</a>
        </div>
    </div>
@endsection
