@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Edit Berita</h2>

            <form method="POST" action="{{ route('berita.update', $make->id) }}">
                @csrf
                @method('PUT')
                <br><input class="form-control" style="width: 100%;" name="gambar" placeholder="Gambar"
                    value="{{ $make->gambar }}" required><br>
                <div class="d-flex">
                    <br><input class="form-control me-1" style="width: 50%;" name="title" placeholder="title"
                        value="{{ $make->title }}" required><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="deskripsi" placeholder="Deskripsi"
                        value="{{ $make->deskripsi }}" required><br>
                </div><br>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('berita') }}">Back</a>
                </div>

            </form>
        </div>
    </div>
@endsection
