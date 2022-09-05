@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Pembayaran</h2>

            <form method="POST" action="{{ route('murid.update', $make->id) }}">
                @csrf
                @method('PUT')
                <br><input class="form-control" style="width: 100%;" name="nama" placeholder="Nama"
                    value="{{ $make->nama }}" required readonly><br>
                <div class="d-flex">
                    <br><input class="form-control me-1" style="width: 50%;" name="nis" placeholder="Nis"
                        value="{{ $make->nis }}" required readonly><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="kelas" placeholder="Kelas"
                        value="{{ $make->kelas }}" required readonly><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="jurusan" placeholder="Jurusan"
                        value="{{ $make->jurusan }}" required readonly><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="spp" placeholder="SPP"
                        value="{{ $make->spp }}" required readonly><br>
                    <br><input class="form-control ms-1" style="width: 50%;" name="tahun" placeholder="Tahun"
                        value="{{ $make->tahun }}" required><br>
                </div>
                <div class="d-flex gap-4 flex-column flex-md-row mt-1">
                    {{-- 0-6 Bulan --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Januari">
                            <label for="role">Januari</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Februari">
                            <label for="role">Februari</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Maret">
                            <label for="role">Maret</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="April">
                            <label for="role">April</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Mei">
                            <label for="role">Mei</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Juni">
                            <label for="role">Juni</label>
                        </div>
                    </div>
                    {{-- 0-6 Bulan End --}}

                    {{-- 6-12 Bulan --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Juni">
                            <label for="role">Juni</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Agustus">
                            <label for="role">Agustus</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="September">
                            <label for="role">September</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Oktober">
                            <label for="role">Oktober</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="November">
                            <label for="role">November</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="spp" value="Desember">
                            <label for="role">Desember</label>
                        </div>
                    </div>
                    {{-- 6-12 Bulan End --}}
                </div>

                TTL <br><input type="date" class="button_date" name="tanggal_lahir" value="{{ $make->tanggal_lahir }}"
                    required readonly>
                <br>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('spp') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
