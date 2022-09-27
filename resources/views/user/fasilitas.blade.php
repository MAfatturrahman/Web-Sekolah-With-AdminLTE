@extends('layouts.index')
@extends('layouts.cssFasilitas')

@section('content')
    <link href="css/homepages.css" rel="stylesheet">
    <nav class="navbar bg-primary" style="width: 100%">
        <div class="container-fluid">
            <span style="cursor:pointer; color: white;" onclick="openNav()">&#9776;</span>
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

    <div class="body-top" style="text-align: center;">
        <h3>Sekolah Negeri 1 Indonesia</h3>
        <p>Sekolah Unggulan Di Indonesia Hanyalah Di Sekolah Negeri Ini. <br> Sekolah Dengan Lulusan Murid-Murid Hebat Dan
            Pintar Di Indonesia. <br> Apapun Sekolahnya Sekolah Negeri Pilihannya.</p>
    </div>

    <div class="container">
        <div class="my_card">
            <div class="card_thumbnail">
                <img src="https://smppjsidoarjo.sch.id/images/5_Profil/Fasilitas/Fasilitas_Sekolah_17-min.jpg">
            </div>
            <div class="card_content">
                <h1 class="card_title" style="text-align: left">Kelas</h1>
                <p class="card_description" style="text-align: left">Kelas Dari Sekolah Negeri Kami Sangatlah Nyaman Untuk
                    Belajar Dan Memiliki Suasana Lingkungan Yang Sangat Nyaman, Setiap Hari Seluruh Kelas Di Sekolah Negeri
                    Kami Selalu Di Perikasa Atas Seluruh Kebersihannya Mulai Dari Papan Tulis Hingga Meja Dan Juga Kursi Di
                    Kelas Ini Juga Memiliki Fasilitas Seperti Wifi, Terminal Listrik, Loker Dan Proyektor Di Setiap
                    Kelasnya.</p>
            </div>
        </div>
        <div class="my_card">
            <div class="card_content">
                <h1 class="card_title" style="text-align: right">Lapangan Olahraga</h1>
                <p class="card_description" style="text-align: right">Lapangan Olahraga kami Sangat Lah Luas Dan Mewah, Kami
                    Memiliki Dua Lapangan Olahraga Utama Yaitu Outdoor Dan Indoor Kedua Lapanngan Selalu Di Jaga Mulai Dari
                    Kerusakan Hingga Kebersihan, Kedua Lapangan Memiliki Luas Yang Kurang Lebih Sama Tetapi Lapangan Indoor
                    Hanya Di Gunakan Ketika Cuaca Buruk Saja, Kita Juga Memiliki Lapangan Olahraga Kecil Yang Terpisah Dari
                    Kedua Lapangan Utama Yaitu Lapangan Batminton, Voli, Basket, Dan Tenis Meja.</p>
            </div>
            <div class="card_thumbnail">
                <img src="https://cdn-brilio-net.akamaized.net/news/2016/02/02/40719/162921-sekolah-mewah.jpg">
            </div>
        </div>
        <div class="my_card">
            <div class="card_thumbnail">
                <img src="https://www.99.co/blog/indonesia/wp-content/uploads/2020/11/sekolah-termahal-3.jpg">
            </div>
            <div class="card_content">
                <h1 class="card_title" style="text-align: left">Gedung Sekolah</h1>
                <p class="card_description" style="text-align: left">Kami Memiliki Gedung 3 Gedung Sekolah Yang Masing
                    Masing Mamiliki 4 Lantai, Gedung Pertama Di Sediakan Untuk Sekolah Dasar (SD), Gedung Ke Dua Disediakan
                    Untuk Sekolah Menengah Pertama (SMP), Dan Gedung Yang Ketiga Digunakan Untuk Sekolah Menengah Atas
                    (SMA), Kalian Dapat Melihat Warna Setiap Gedung Yang Berbeda-Beda Tergantung Seberapa Tinggi Pendidikan
                    Yang Dimiliki Oleh Murid.</p>
            </div>
        </div>
    </div>

    <div style="width: 90%; margin: auto;">
        <a class="judul" href="{{ url('/Guru') }}">Guru</a>
        <br>
        <div class="body-top" style="text-align: center;">
            <h3>Kualitas Guru </h3>
            <p>Kualitas Yang Dimiliki Guru Kami Sangatlah Baik, Cara Mengajar Yang Mereka Lakukan Pun Berbeda-Beda
                Tergantung Bagaimana Cara Belajar Setiap Murid <br> Hampir Setiap Guru Kami Memiliki Prestasi Yang Sangat
                bagus Mulai Dari Piagam Maupun Piala Yang Mereka Dapat Kan Dari Lomba Lomba Yang mereka Ikuti, Guru-guru
                Yang Kami Miliki Juga Sangatlah Baik.</p>
        </div>
        <div class="container">
            <div class="my_card">
                <div class="card_thumbnail">
                    <img
                        src="http://assets.kompasiana.com/items/album/2020/07/24/cara-menata-interior-desain-kantor-minimalis-yang-nyaman-danislexaw-5f1ad725d541df11b2111e92.jpg?t=o&v=770">
                </div>
                <div class="card_content">
                    <h1 class="card_title" style="text-align: left">Ruang Guru</h1>
                    <p class="card_description" style="text-align: left">Ruang Guru Yang Kami Miliki Sangatlah Bagus Dan
                        Bersih, Fasilitas Yang Dimiliki Ruang Guru Kami Sangatlah Lengkap Mulai Dari Alat Berat Sampai Alat
                        Ringan Hingga Ke Toilet. Kami Memiliki Tiga Jenis Toilet Mulai Dari Toilet Duduk, Jongkok, dan
                        Berdiri.</p>
                </div>
            </div>
            <div class="my_card">
                <div class="card_content">
                    <h1 class="card_title" style="text-align: right">Toilet Guru</h1>
                    <p class="card_description" style="text-align: right">Fasilitas Toilet Guru Kami Sangatlah Bersih Dan
                        Tersusun Rapih, Toiet Kami Juga Sangatlah Wangi Memiliki 12 Jenis Bau Wangi-Wangian, Kebersihan
                        Dan Kerapihan Tiolet Yang kami Miliki Sangatlah Terjamin</p>
                </div>
                <div class="card_thumbnail">
                    <img src="https://i.pinimg.com/736x/15/a2/b2/15a2b25b58b09f8b54317fdaee8de12e.jpg">
                </div>
            </div>
        </div>
    </div>

    <div style="width: 90%; margin: auto;">
        <a class="judul" href="{{ url('/Petugas') }}">Staf</a>
        <br>
        <div class="body-top" style="text-align: center;">
            <h3>Kualitas Staf</h3>
            <p>Seluruh Pengurus Sekolah Yang Kami Miliki Sangatlah Berpengalaman Dan Juga Baik, Beberapa Dari Pengurus
                Sekolah Sangatlah Di Siplin Akan Peraturan yang ada Walaupun Mereka Tetap Menegur Dengan Cara Yang Terbaik
                Dan Juga Sopan.</p>
        </div>
        <div class="container">
            <div class="my_card">
                <div class="card_thumbnail">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVOtPPFs_ZbTk1dcjCguekgvEqREHXxYTVVA&usqp=CAU">
                </div>
                <div class="card_content">
                    <h1 class="card_title" style="text-align: left">Ruang Tata Usaha</h1>
                    <p class="card_description" style="text-align: left">Ruang Tata Usaha Sekolah negeri Kami Sangatlah Rapi
                        Dan Juga Bersih, Walupun Jarang Di Bersihkan, Ini Semua Karna Karyawan Yang kami Miliki Sangatlah
                        Taat Pada Peraturan Yang Sekolah Kami Berikan, Dan Juga Karyawan Yang kami Miliki Sangatlah Good
                        looking Semua.</p>
                </div>
            </div>
            <div class="my_card">
                <div class="card_content">
                    <h1 class="card_title" style="text-align: right">Ruang Kepala sekolah</h1>
                    <p class="card_description" style="text-align: right">Ruang Kepala Sekolah Kami Sangatlah Rapi Karna
                        Staf Kami Sangatlah Profesional, Ruang Kepala Sekolah Kami Juga Sangatlah Memadai Karna Kami
                        Memiliki Fasilitas Yang Sangat Lengkap Mulai Dari Alat Berat Hinggak Ke Alat Ringan, Di ruang Kepala
                        Sekolah Juga Memiliki Fasilitas Tambahan Yaitu Maid Dan Juga Wifi.</p>
                </div>
                <div class="card_thumbnail">
                    <img src="https://oliswel.com/wp-content/uploads/2018/08/Ruang-Kerja-Minimalis-Di-Ruang-Keluarga.jpg">
                </div>
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
