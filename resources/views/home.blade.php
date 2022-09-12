@extends('adminlte::page')
@extends('CSS.guru')

@section('title', 'Sekolah')

@section('content_header')
    <h1>Sekolah Negeri</h1>
@stop

@section('content')
    <p>Selamat Datang Di Sekolah Negeri Kami</p>
    @php
    foreach ($dataGuru as $guru) {
        $jumlahGuru = 0;
    }
    foreach ($dataPetugas as $petugas) {
        $jumlahPetugas = 0;
    }
    foreach ($dataMurid as $murid) {
        $jumlahMurid = 0;
    }
    foreach ($dataBerita as $berita) {
        $jumlahBerita = 0;
    }
    foreach ($dataUser as $user) {
        $jumlahUser = 0;
    }
    @endphp

    @php
    foreach ($dataGuru as $guru) {
        $jumlahGuru++;
    }
    foreach ($dataPetugas as $petugas) {
        $jumlahPetugas++;
    }
    foreach ($dataMurid as $murid) {
        $jumlahMurid++;
    }
    foreach ($dataBerita as $berita) {
        $jumlahBerita++;
    }
    foreach ($dataUser as $user) {
        $jumlahUser++;
    }
    @endphp
    <div class="d-flex gap-3">
        <div class="my_card_dasbord">
            <h4 class="card-header text-primary">Guru</h4>
            <div class="card-body">
                <p>Jumlah Guru Yang Dimiliki Oleh Sekolah Negeri Saat Ini Adalah</p>
                <h5>{{ $jumlahGuru }} Guru</h5><br>
                <a href="/guru" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>

        <div class="my_card_dasbord">
            <h4 class="card-header text-primary">Petugas</h4>
            <div class="card-body">
                <p>Jumlah Petugas Yang Dimiliki Oleh Sekolah Negeri Saat Ini Adalah</p>
                <h5>{{ $jumlahPetugas }} Petugas</h5><br>
                <a href="/petugas" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>

        <div class="my_card_dasbord">
            <h4 class="card-header text-primary">Murid</h4>
            <div class="card-body">
                <p>Jumlah Murid Yang Dimiliki Oleh Sekolah Negeri Saat Ini Adalah</p>
                <h5>{{ $jumlahMurid }} Murid</h5><br>
                <a href="/murid" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>

        <div class="my_card_dasbord">
            <h4 class="card-header text-primary">Berita</h4>
            <div class="card-body">
                <p>Jumlah Berita Yang Dimiliki Oleh Sekolah Negeri Saat Ini Adalah</p>
                <h5>{{ $jumlahBerita }} Berita</h5><br>
                <a href="/berita" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </div>

    <div class="d-flex gap-3">
        <div class="my_card_dasbord">
            <h4 class="card-header text-primary">Akun</h4>
            <div class="card-body">
                <p>Jumlah Akun Yang Di Pakai Oleh Sekolah Negeri Saat Ini Adalah</p>
                <h5>{{ $jumlahUser }} Akun</h5><br>
                <a href="/userManagement" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    </div>
    <br>
@stop

@section('css')
@endsection

@section('js')
@endsection
