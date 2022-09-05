@extends('layouts.index')
@extends('layouts.css')

@section('content')
    <nav class="navbar bg-light " style="width: 100%">
        <div class="container-fluid">
            <span style="cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="logout" href="{{ url('login')}}">Login</a>
        </div>
    </nav>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ url('/') }}">Beranda</a>
        <a href="{{ route('user.fasilitas') }}">Fasilitas</a>
        <a href="{{ route('user.jurusan') }}">Jurusan</a>
        <a href="{{ route('user.berita') }}">Berita</a>
        <a href="{{ route('user.Ekstrakurikuler') }}">Ekstrakurikuler</a>
    </div>

    <div class="img">
        <h1>Selamat Datang Di Website Sekolah Kami <br> Sekolah Negeri</h1>
    </div><br>

    <div class="body-top" style="text-align: center;">
        <h3>Mengapa Harus Memilih Sekolah Negeri?</h3>
        <p>Karna Sekolah Negeri Yang Kami Miliki Sangatlah Bagus Dan Juga Bermartabat, Jumlah Pendaftarannya Pun Murah,
            <br> Dapat Di Jamin Ketika Sudah Lulus Dari Sekolah Negeri Kami Pasti Anda Akan Mendapatkan Pekerjaan Tetap.
        </p>
    </div>

    <div class="d-flex justify-content-between container gap-3">
        <div class="my_card">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1>SMK</h1>
                <p class="text-center">Kami Juga Memiliki Sekolah SMK Tidak Hanya SMA Saja Yang Ada Di Sekolah Negeri Kami
                    Tapi Kami Juga Memiliki Sekolah Kejuruan Yang Sangat Lah Bagus</p>
            </div>
        </div>

        <div class="my_card">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1>SMA</h1>
                <p class="text-center">Tidak kala Dengan SMK Sekolah SMA Kami Juga Sangatlah Bagus Sehingga Bisa Bersain
                    Dalam Dunia Kerja, Jadi kaian Dapat Memilih Kalian Ingin Masuk SMA Atau SMK Itu Adalah Pilihan Kalian
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="body-top-space">
            <h3>Visi Misi Kami</h3>
        </div>
    </div>

    <div class="d-flex justify-content-between container gap-3">
        <div class="my_card_misi">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1>VISI</h1>
                <p class="text-center">Menjadikan penyelenggara pendidikan berkualitas dan terpercaya.</p>
            </div>
        </div>

        <div class="my_card_misi">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1>MISI</h1>
                <p class="text-center">Mewujudkan tata kelola, sistem pengendalian manajemen, dan sistem. <br>
                    Pengawasan internal yang modern, efektif, dan efesien. <br>
                    Menyalurkan dan Mendukung kreativitas peserta didik dengan sarana dan prasarana yang lengkap. <br>
                    Mewujudkan budaya religi, jujur, disiplin, beretika, berestetika, pekerja keras, kreatif, inovatif,
                    komptetitif, dan berkualitas. <br>
                    Mewujudkan dinamisasi peningkatan kualitas pendidikan berkarakter yang berkesinambungan dan
                    berkelanjutan. <br>
                    Mewujudkan produk kompetensi keahlian bernilai Jual Pasar Global. <br>
                    Memperluas akses kemitraan dunia kerja yang menjamin lapangan kerja dan prakerin bagi peserta didik dan
                    lulusan SMK BPI. <br>
                </p>
            </div>
        </div>
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
