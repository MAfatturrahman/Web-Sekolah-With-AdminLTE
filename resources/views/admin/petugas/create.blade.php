@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Tambah Petugas</h2>

            <form method="POST" action="{{ url('petugas') }}">
                @csrf
                @if (Session::has('alert'))
                    <div class="alert alert-danger">{{ Session::get('alert') }}</div>
                @endif

                <input class="form-control" style="width: 100%;" type="text" name="nama" placeholder="Nama" required><br>
                <div class="d-flex">
                    <br><input class="form-control me-1" style="width: 50%;" type="text" name="tugas"
                        placeholder="Tugas" required><br>
                    <br><input class="form-control ms-1" style="width: 50%;" type="number" name="nip" placeholder="NIP"
                        required><br>
                </div>
                TTL <br><input type="date" class="button_date" name="tanggal_lahir" required><br>
                <br>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('petugas') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
