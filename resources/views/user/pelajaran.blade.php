@extends('layouts.index')
@extends('layouts.cssHomePages')

@section('content')
    <nav class="navbar bg-primary " style="width: 100%">
        <div class="container-fluid">
            <span style="cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>
            <a class="login" href="{{ url('login') }}">Login</a>
        </div>
    </nav>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="isi-navbar">
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ route('user.fasilitas') }}">Fasilitas</a>
            <a href="{{ route('user.jurusan') }}">Jurusan</a>
            <a href="{{ route('user.prestasi') }}">Prestasi</a>
            <a href="{{ route('user.pelajaran') }}">Pelajaran</a>
            <a href="{{ route('user.galeri') }}">Galeri</a>
            <a href="{{ route('user.berita') }}">Berita</a>
            <a href="{{ route('user.Ekstrakurikuler') }}">Ekstrakurikuler</a>
        </div>
    </div>

    <div class="container">
        <div class="my_card">
            <h4>SMK</h4>
            @foreach ($datas as $pelajaran)
                @if ($pelajaran->sma_smk === 'SMK')
                    @if ($pelajaran->jurusan === 'RPL')
                        <div class="d-flex flex-column">
                            <h5>RPL</h5>
                            <p>{{ $pelajaran->deskripsi }}</p>
                        </div>
                    @elseif($pelajaran->jurusan === 'TKJ')
                        <h5>TKJ</h5>
                        <p>{{ $pelajaran->deskripsi }}</p>
                    @elseif($pelajaran->jurusan === 'OTKP')
                        <h5>OTKP</h5>
                        <p>{{ $pelajaran->deskripsi }}</p>
                    @else
                        <h5>TATA BOGA</h5>
                        <p>{{ $pelajaran->deskripsi }}</p>
                    @endif
                @endif
            @endforeach
        </div>
    </div>


    <h4>SMA</h4>
    @foreach ($datas as $pelajaran)
        @if ($pelajaran->sma_smk === 'SMA')
            @if ($pelajaran->jurusan === 'IPA')
                <h5>IPA</h5>
                <p>{{ $pelajaran->deskripsi }}</p>
            @elseif($pelajaran->jurusan === 'IPS')
                <h5>IPS</h5>
                <p>{{ $pelajaran->deskripsi }}</p>
            @endif
        @endif
    @endforeach

@section('script')
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
@endsection
