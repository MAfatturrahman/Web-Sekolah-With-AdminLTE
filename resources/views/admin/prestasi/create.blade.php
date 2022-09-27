@extends('CSS.guru')
@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="my_card">
            <form method="POST" action="{{ url('prestasi') }}">
                @csrf

                @if (Session::has('alert'))
                    <div class="alert alert-danger">{{ session::get('alert') }}</div>
                @endif

                <div class="d-flex gap-3 mb-3">
                    <input class="form-control" type="text" name="siswa_guru" placeholder="Siswa/guru" required>
                    <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama lengkap" required>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <input class="form-control" type="text" name="kejuaraan" placeholder="Kejuaraan" required>
                    <input class="form-control" type="text" name="bentuk" placeholder="Bentuk" required>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <input class="form-control" type="text" name="tingkat" placeholder="Tingkat" required>
                    <input class="form-control" type="number" name="tahun" placeholder="Tahun" required>
                </div>

                <div class="d-flex gap-3 mb-4">
                    <input class="form-control" type="text" name="juara" placeholder="Juara" required>
                    <input class="form-control" type="text" name="tempat_penyelenggara"
                        placeholder="Tempat penyelenggara" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <a class="btn btn-primary" href="{{ url('prestasi') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
