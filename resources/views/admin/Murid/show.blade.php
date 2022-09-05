@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container gap-4">
        <div class="my_card">
            <h3>Nama</h3>
            <h2 class="form-control mb-4" style="width: 100%;" name="nama">
                {{ $make->nama }}
            </h2>
            <div class="d-flex mb-4">
                <h3>Umur : </h3>
                <h2 class="form-control me-3 ms-3" style="width: 35%;" name="umur">{{ $make->umur }}
                </h2>
                <h3 style="margin-left: 5%">NIS : </h3>
                <h2 class="form-control ms-3 me-3" style="width: 35%;" name="nis">{{ $make->nis }}
            </div>
            <div class="d-flex mb-4">
                <h3>Kelas : </h3>
                <h2 class="form-control me-3 ms-3" style="width: 35%;" name="kelas">{{ $make->kelas }}
                </h2>
                <h3 style="margin-left: 5%">TTL : </h3>
                <h2 class="form-control ms-3 me-3" style="width: 35%;" name="tanggal_lahir">
                    {{ $make->tanggal_lahir }}</h2>
            </div>
            <div class="d-flex mb-4">
                <h3>Jurusan </h3>
                <h2 class="form-control me-1 ms-1" name="kelas">{{ $make->jurusan }}
                </h2>
                <h3>SPP </h3>
                <h2 class="form-control ms-1 me-1" name="tanggal_lahir">
                    {{ $make->spp }}</h2>
                <h3>TSPP</h3>
                <h2 class="form-control ms-1 me-1"" name="tahun">
                    {{ $make->tahun }}</h2>
            </div>

            <a class="btn btn-primary" href="{{ url('murid') }}">Back</a>
        </div>
    </div>
@endsection
