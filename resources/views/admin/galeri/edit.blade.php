@extends('CSS.guru')
@extends('adminlte::page')

@section('content')
    <table>
        <div class="container d-flex justify-content-center">
            <div class="my_card_galeri">
                <form method="POST" action="{{ route('galeri.update', $galeri->id) }}">
                    @csrf
                    @method('PUT')

                    @if (Session::has('alert'))
                        <div class="alert alert-danger">{{ session::get('alert') }}</div>
                    @endif

                    <div class="d-flex mb-2 gap-3">
                        <input class="form-control" type="text" name="judul" placeholder="Judul"
                            value="{{ $galeri->judul }}" required>
                        <input class="form-control" type="text" name="foto" value="{{ $galeri->foto }}"
                            placeholder="Foto" required>
                    </div>

                    <div class="mb-4">
                        <input class="form-control" type="text" name="deskripsi" value="{{ $galeri->deskripsi }}"
                            placeholder="Deskripsi" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Simpan</button>
                        <a class="btn btn-primary" href="{{ url('galeri') }}">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </table>
@endsection
