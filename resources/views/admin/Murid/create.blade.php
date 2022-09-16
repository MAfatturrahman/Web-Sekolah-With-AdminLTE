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

                <div class="d-flex">
                    <input class="form-control me-1 mb-3" style="width: 25%;" type="number" name="nis" placeholder="NIS"
                        required>
                    <input class="form-control" style="width: 100%;" type="text" name="nama" placeholder="Nama"
                        required>
                </div>
                <div class="d-flex">
                    <x-adminlte-select class="btn btn-info" name="kelas">
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

                    <x-adminlte-select class="btn btn-info" name="jk" fgroup-class="ms-2 w-25">
                        <option selected disabled>Jenis Kelamin</option>
                        <option value="Laki">Laki-laki</option>
                        <option value="Wanita">Perempuan</option>
                    </x-adminlte-select>
                </div>

                <div class="d-flex flex-column mb-3">
                    <div class="d-flex">
                        <div class="d-flex flex-column">
                            Dari <input type="date" class="button_date me-3" name="from" required>
                        </div>
                        <div class="d-flex flex-column">
                            Sampai <input type="date" class="button_date me-3" name="to" required>
                        </div>
                        <div class="d-flex flex-column">
                            TTL <input type="date" class="button_date" name="tanggal_lahir" required>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('murid') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
