@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <table>
        <div class="container">
            <div class="my_card">
                <form method="POST" action="{{ url('berita') }}">
                    @csrf
                    @if (Session::has('alert'))
                        <div class="alert alert-danger">{{ session::get('alert') }}</div>
                    @endif
                    <div class="d-flex">
                        <br><input class="form-control me-1" style="width: 50%;" type="text" name="gambar"
                            placeholder="Gambar" required><br>
                        <br><input class="form-control ms-1" style="width: 50%;" type="text" name="title"
                            placeholder="Title" required><br>
                    </div>
                    <br><input class="form-control ms-1" style="width: 100%; height:100px; text-align: center;"
                        type="text" name="deskripsi" placeholder="Deskripsi" required><br>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Selesai</button>
                        <a class="btn btn-primary" href="{{ url('berita') }}">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </table>
@endsection
