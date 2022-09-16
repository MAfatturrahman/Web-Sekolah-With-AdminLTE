@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Edit Murid</h2>

            <form method="POST" action="{{ route('murid.update', $murid->id) }}">
                @csrf
                @method('PUT')

                <div class="d-flex mb-3">
                    <input class="form-control me-2" style="width: 30%;" name="nis" placeholder="Nis"
                        value="{{ $murid->nis }}" required>
                    <input class="form-control" style="width: 100%;" name="nama" placeholder="Nama"
                        value="{{ $murid->nama }}" required>
                </div>

                <div class="d-flex mb-3">
                    <input class="form-control me-2" name="umur" placeholder="Umur" value="{{ $murid->umur }}" required>
                    <input class="form-control me-2" name="kelas" placeholder="Kelas" value="{{ $murid->kelas }}"
                        required>
                    <input class="form-control me-2" name="jurusan" placeholder="Jurusan" value="{{ $murid->jurusan }}"
                        required>
                    <input class="form-control" name="jk" placeholder="JK" value="{{ $murid->jk }}" required>
                </div>

                <div class="d-flex flex-column">
                    TTL <input type="date" class="button_date" style="width: 15%" name="tanggal_lahir"
                        value="{{ $murid->tanggal_lahir }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('murid') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
