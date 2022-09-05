@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Edit Murid</h2>

            <form method="POST" action="{{ route('murid.update', $make->id) }}">
                @csrf
                @method('PUT')
                <br><input class="form-control" style="width: 100%;" name="nama" placeholder="Nama"
                    value="{{ $make->nama }}" required><br>
                <div class="d-flex">
                    <br><input class="form-control me-1" style="width: 50%;" name="nis" placeholder="Nis"
                        value="{{ $make->nis }}" required><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="kelas" placeholder="Kelas"
                        value="{{ $make->kelas }}" required><br>
                </div>
                <div class="d-flex">
                    <br><input class="form-control me-1" style="width: 50%;" name="spp" placeholder="SPP"
                        value="{{ $make->spp }}" required readonly><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="jurusan" placeholder="Jurusan"
                        value="{{ $make->jurusan }}" required><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="tahun" placeholder="Tahun"
                        value="{{ $make->tahun }}" required readonly><br>
                </div>
                TTL <br><input type="date" class="button_date" name="tanggal_lahir" value="{{ $make->tanggal_lahir }}""
                    required><br>
                <br>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('murid') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
