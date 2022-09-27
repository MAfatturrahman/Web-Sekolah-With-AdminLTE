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

    <div class="container d-flex gap-3 mt-5 flex-wrap justify-content-center">
        @foreach ($galeri as $key => $values)
            <div class="my_card_galeri_show">
                <h4 class="card-header text-primary mb-2 text-center">{{ $values->judul }}</h4>
                <div class="card-body">
                    <img class="w-100 h-100" src="{{ $values->foto }}">
                    <p class="mt-2" id="deskripsi">{{ $values->deskripsi }}</p>
                    <span type="button" class="text-primary font-weight-bold" data-bs-toggle="modal"
                        data-bs-target="#galeriModal" data-judul="{{ $values->judul }}"
                        data-deskripsi="{{ $values->deskripsi }}" id="selengkapnya">Selengkapnya
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    <div class="modal fade" id="galeriModal" tabindex="-1" aria-labelledby="galeriModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galeriModalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="galeriModalContent"></div>
            </div>
        </div>
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

        document.querySelectorAll('#deskripsi').forEach((deskripsi) => {
            let deskripsiLama = deskripsi.textContent
            let deskripsiBaru = `${deskripsi.textContent.substring(0, 97)} ...`
            let bukaDeskripsi = false;

            if (deskripsi.textContent.length > 100) {
                deskripsi.innerHTML = deskripsiBaru
            }

        })

        document.querySelectorAll('#selengkapnya').forEach((element) => {
            element.addEventListener('click', function() {
                document.getElementById('galeriModalTitle').innerHTML = this.getAttribute('data-judul')
                document.getElementById('galeriModalContent').innerHTML = this.getAttribute(
                    'data-deskripsi')
            })
        })
    </script>
@endsection
