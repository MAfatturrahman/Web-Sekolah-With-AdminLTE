@extends('CSS.guru')
@extends('adminlte::page')

@section('content')
    <table>
        <div class="container d-flex justify-content-center">
            <div class="my_card_galeri">
                <form method="POST" action="{{ url('galeri') }}">
                    @csrf

                    @if (Session::has('alert'))
                        <div class="alert alert-danger">{{ session::get('alert') }}</div>
                    @endif

                    <div class="d-flex gap-3 mb-2">
                        <input class="form-control" type="text" name="judul" placeholder="Judul" required>
                        <input class="form-control" type="text" name="foto" placeholder="Foto" required>
                    </div>

                    <div class="mb-4">
                        <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Tambah</button>
                        <a class="btn btn-primary" href="{{ url('galeri') }}">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </table>
@endsection
