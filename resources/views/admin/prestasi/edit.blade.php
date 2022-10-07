@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <div class="container">
        <div class="my_card">
            <form method="POST" action="{{ url('prestasi/' . $prestasi->id) }}">
                @csrf
                @method('PUT')
                @if (Session::has('alert'))
                    <div class="alert alert-danger">{{ session::get('alert') }}</div>
                @endif

                <div class="d-flex gap-3 mb-3">
                    <input class="form-control" type="text" name="siswa_guru" placeholder="Siswa/guru"
                        value="{{ $prestasi->siswa_guru }}" required>
                    <input class="form-control" type="text" name="nama_lengkap" placeholder="Nama lengkap"
                        value="{{ $prestasi->nama_lengkap }}" required>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <input class="form-control" type="text" name="kejuaraan" placeholder="Kejuaraan"
                        value="{{ $prestasi->kejuaraan }}" required>
                    <input class="form-control" type="text" name="bentuk" placeholder="Bentuk"
                        value="{{ $prestasi->bentuk }}" required>
                </div>

                <div class="d-flex gap-3 mb-3">
                    <input class="form-control" type="text" name="tingkat" placeholder="Tingkat"
                        value="{{ $prestasi->tingkat }}" required>
                    <input class="form-control" type="number" name="tahun" placeholder="Tahun"
                        value="{{ $prestasi->tahun }}" required>
                </div>

                <div class="d-flex gap-3 mb-4">
                    <input class="form-control" type="text" name="juara" placeholder="Juara"
                        value="{{ $prestasi->juara }}" required>
                    <input class="form-control" type="text" name="tempat_penyelenggara"
                        value="{{ $prestasi->tempat_penyelenggara }}" placeholder="Tempat penyelenggara" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Tambah</button>
                    <a class="btn btn-primary" href="{{ url('prestasi') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
