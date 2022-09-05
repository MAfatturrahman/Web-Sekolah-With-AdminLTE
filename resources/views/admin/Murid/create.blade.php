@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Tambah Murid</h2>

            <form method="POST" action="{{ url('murid') }}">
                @csrf
                @if (Session::has('alert'))
                    <div class="alert alert-danger">{{ Session::get('alert') }}</div>
                @endif

                <input class="form-control" style="width: 100%;" type="text" name="nama" placeholder="Nama" required><br>
                <div class="d-flex">
                    <br><input class="form-control me-1" style="width: 50%;" type="number" name="nis" placeholder="NIS"
                        required><br>

                    <br><input class="form-control ms-1" style="width: 100%;" type="number" name="tahun"
                        placeholder="Tahun Pembayaran" required><br>
                </div>
                <div class="d-flex">
                    <x-adminlte-select class="btn btn-info" name="kelas" fgroup-class="me-2">
                        <option selected disabled>Kelas</option>
                        <option value="XII">XII</option>
                        <option value="XI">XI</option>
                        <option value="X">X</option>
                    </x-adminlte-select>
                    <x-adminlte-select class="btn btn-info" name="jurusan" fgroup-class="ms-2 w-25">
                        <option selected disabled>Jurusan</option>
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="OTKP">OTKP</option>
                        <option value="IPA">IPA</option>
                        <option value="IPS">IPS</option>
                    </x-adminlte-select>
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

                TTL <br><input type="date" class="button_date" name="tanggal_lahir" required><br>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('murid') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
