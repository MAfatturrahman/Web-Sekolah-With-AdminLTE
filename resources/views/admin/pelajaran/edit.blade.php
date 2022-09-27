@extends('CSS.guru')
@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="my_card">
            <form method="POST" action="{{ url('pelajaran') }}">
                @csrf
                @method('PUT')

                @if (Session::has('alert'))
                    <div class="alert alert-danger">{{ session::get('alert') }}</div>
                @endif

                <div class="d-flex mb-3 gap-3">
                    <input class="form-control" type="text" name="sma_smk" placeholder="SMA/SMK"
                        value="{{ $pelajaran->sma_smk }}" required>
                    <input class="form-control" type="text" name="mata_pelajaran" placeholder="Mata Pelajaran"
                        value="{{ $pelajaran->mata_pelajaran }}" required>
                </div>
                <div class="d-flex mb-4 gap-3">
                    <input class="form-control w-25" type="text" name="jurusan" placeholder="Jurusan"
                        value="{{ $pelajaran->jurusan }}" required>
                    <input class="form-control" type="text" name="deskaripsi" placeholder="Deskripsi"
                        value="{{ $pelajaran->deskripsi }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <a class="btn btn-primary" href="{{ url('pelajaran') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
