@extends('layouts.index')
@extends('layouts.cssEkstrakurikuler')

@section('content')
    <link href="css/homepages.css" rel="stylesheet">
    <nav class="navbar bg-light " style="width: 100%">
        <div class="container-fluid">
            <span style="cursor:pointer" onclick="openNav()">&#9776;</span>
            <a class="logout" href="{{ url('login') }}">Login</a>
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

    <div class="container">
        <div class="body-top-space">
            <h3>Ekstrakurikuler</h3>
        </div>

        <div class="my_card">
            <div class="card_thumbnail">
                <img src="https://almasoem.sch.id/wp-content/uploads/2022/05/Tabligh-Akbar-6.jpg">
            </div>

            <div class="card_content">
                <h1 class="card_title" style="text-align: left">Ekskul</h1>
                <p class="card_description" style="text-align: left">Kalian Harus Mengikuri Ekstra Kulikuler Kami Karna kami
                    Memiiliki Ekskul Yang Bermacam-Macam Dan Sangat Lah Bagus Kita Juga Memebedakan Ekskul SMA Dan Juga SMK
                    Karna Ekskul Kedua Perguruan Tersebut Sangatlah Berbeda, Ada Beberapa Ekskul Yang Harus Kalian Ikuti
                    Tetapi Tidak Semuanya.</p>
            </div>
        </div><br><br>

        <div class="body-top-space">
            <h3 style="font-size: 20px;">Daftar Ekstrakurikuler SMK</h3>
        </div>

        <div style="line-height: 0.2;">
            <p> - Akustik </p>
            <p> - Animasi </p>
            <p> - Futsal </p>
            <p> - Basket </p>
            <p> - Muaythai </p>
            <p> - Mikrotik </p>
            <p> - Modern Dance </p>
            <p> - Pramuka </p>
            <p> - Rohis </p>
            <p> - Japanese Club </p>
            <p> - English Club </p>
            <p> - Math Club </p>
            <p> - Panahan </p>
            <p> - Softball </p>
        </div><br><br>

        <div class="body-top-space">
            <h3 style="font-size: 20px;">Daftar Ekstrakurikuler SMK</h3>
        </div>

        <div style="line-height: 0.2; margin-bottom: 30px;">
            <p> - Pendidikan Kepramukaan </p>
            <p> - Tenis Meja </p>
            <p> - Seni Tari </p>
            <p> - Teater Jubah Macan </p>
            <p> - PHC (Padmanaba Hiking Club) /Pecinta Alam </p>
            <p> - Paspad/ Paduan Suara </p>
            <p> - Robotik </p>
            <p> - Pramuka </p>
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
