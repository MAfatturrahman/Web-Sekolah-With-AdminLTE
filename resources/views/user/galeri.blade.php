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
            <a href="{{ route('user.galeri') }}">Galeri</a>
            <a href="{{ route('user.berita') }}">Berita</a>
            <a href="{{ route('user.Ekstrakurikuler') }}">Ekstrakurikuler</a>
        </div>
    </div>

    <div class="container d-flex gap-3 mt-5 flex-wrap justify-content-center">
        @foreach ($galeri as $key => $values)
            <div class="my_card_galeri_show">
                <h4 class="card-header text-primary mb-2 text-center">{{ $values->judul }}</h4>
                <div class="card-body">
                    <img class="w-100 h-100" src="{{ $values->foto }}">
                    <p class="mt-2">{{ $values->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection

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
