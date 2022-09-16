@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Pembayaran</h2>

            <form method="POST" action="{{ route('spp.update', $murid->id) }}">
                @csrf
                @method('PUT')
                <div class="d-flex mb-3">
                    <input class="form-control me-2" style="width: 30%;" name="nis" placeholder="Nama"
                        value="{{ $murid->nis }}" required readonly>
                    <input class="form-control" style="width: 100%;" name="nama" placeholder="Nama"
                        value="{{ $murid->nama }}" required readonly>
                </div>
                <div class="d-flex mb-3">
                    <input class="form-control me-2" style="width: 50%;" name="jk" placeholder="Nis"
                        value="{{ $murid->jk }}" required readonly>
                    <input class="form-control me-2" style="width: 50%;" name="kelas" placeholder="Kelas"
                        value="{{ $murid->kelas }}" required readonly>
                    <input class="form-control" style="width: 50%;" name="jurusan" placeholder="Jurusan"
                        value="{{ $murid->jurusan }}" required readonly>
                </div>

                <div class="d-flex flex-column">
                    <div class="d-flex mb-3">
                        <div class="d-flex flex-column me-3">
                            TTL <input type="form-control" class="button_date" name="tanggal_lahir"
                                value="{{ $murid->tanggal_lahir }}" required readonly>
                        </div>

                        <div class="d-flex flex-column me-3">
                            Dari <input type="date" class="button_date" name="from" value="{{ $spp->from }}"
                                required>
                        </div>

                        <div class="d-flex flex-column">
                            Sampai <input type="date" class="button_date" name="to" value="{{ $spp->to }}"
                                required>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('spp') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
