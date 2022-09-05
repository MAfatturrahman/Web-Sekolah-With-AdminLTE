@extends('layouts.index')
@extends('layouts.cssindexG')

@section('content')
    <nav class="navbar bg-light " style="width: 100%">
        <div class="container-fluid">
            <span style="cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="logout" href="{{ url('login') }}">Login</a>
        </div>
    </nav>

    @foreach ($datas as $key => $values)
        <div class="container">
            <div class="my_card">
                <div class="card_thumbnail">
                    <img src="{{ $values->gambar }}">
                </div>
                <div class="card_content">
                    <h1 class="card_title" style="text-align: left">{{ $values->title }}</h1>
                    <p class="card_description" style="text-align: left">{{ $values->deskripsi }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ route('user.fasilitas') }}">Fasilitas</a>
        <a href="{{ route('user.jurusan') }}">Jurusan</a>
        <a href="{{ route('user.berita') }}">Berita</a>
        <a href="{{ route('user.Ekstrakurikuler') }}">Ekstrakurikuler</a>
    </div>

    <div class="footer">
        <p>COPYRIGHT ©2022</p>
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
