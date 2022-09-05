@extends('adminlte::page')
@extends('CSS.cssberita')
@section('content')
    <br>
    <div class="container gap-4">
        <div class="my_card">
            <img class="gambar" src="{{ $make->gambar }}">
            <p class="title" style="width: 35%;" name="title">{{ $make->title }}</p>
            <p class="deskripsi" style="width: 35%;" name="deskripsi">{{ $make->deskripsi }}</p>

            <a class="btn btn-primary" href="{{ url('berita') }}">Back</a>
        </div>
    </div>
@endsection
