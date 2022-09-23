@extends('layouts.index')
@extends('layouts.cssjurusan')

@section('content')
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

    <div class="body">
        <nav class="navbar bg-primary " style="width: 100%">
            <div class="container-fluid">
                <span style="cursor:pointer; color: white;" onclick="openNav()">&#9776;</span>
                <a class="login" href="{{ url('login') }}">Login</a>
            </div>
        </nav>

        <div class="body-top" style="text-align: center; margin-top: 20px; width: 100%">
            <h3>Yang Manakah Yang Harus Saya Pilih SMA Atau SMK?</h3>
            <p>Itu Tergantung Kalian Apakah Kalian Ingin Mengambil Keahlian Kerja Atau Kuliah, Masing-Masing Memiliki
                Kelebihan Dan kekurangan Maupun Itu SMK Ataupun SMA</p>
        </div>

        <h1 class="text-center container" style="margin-top: 20px; width: 100%;">SMA</h1>

        <div class="d-flex justify-content-between container gap-3">
            <div class="my_card_sma">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1>IPA</h1>
                    <p class="text-center">Apa yang dimaksud dengan jurusan IPA?
                        Selain belajar Ilmu Alam, anak SMA belajar matematika juga. Oleh sebab itu selain disebut dengan
                        jurusan
                        IPA (Ilmu Pengetahuan Alam) jurusan ini punya dua nama lain lagi, yaitu: MIPA (Matematika dan Ilmu
                        Pengetahuan Alam) dan MIA (Matematika dan Ilmu Alam).</p>
                </div>
            </div>
            <div class="my_card_sma">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1>IPS</h1>
                    <p class="text-center">Secara singkat jurusan IPS di SMA adalah sebuah wadah bagi mereka yang tertarik
                        dan
                        ingin mempelajari tentang hubungan antar manusia dan hubungan antara manusia dengan lingkungannya
                        serta
                        berbagai aspek sosial lainnya melalui berbagai mapelnya.</p>
                </div>
            </div>
        </div>

        <h1 class="text-center container">SMK</h1>

        <div class="d-flex justify-content-between container gap-3">
            <div class="my_card_smk">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1>RPL</h1>
                    <p class="text-center">RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara
                        pengembangan
                        perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak
                        dan
                        manajemen kualitas.</p>
                </div>
            </div>
            <div class="my_card_smk">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1>TKJ</h1>
                    <p class="text-center">Teknik Komputer dan Jaringan merupakan ilmu berbasis Teknologi Informasi dan
                        Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan
                        jaringan
                        komputer, dan pengoperasian perangkat lunak, dan internet.</p>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between container gap-3" style="margin-bottom: 40px">
            <div class="my_card_smk">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1>OTKP</h1>
                    <p class="text-center">Kompetensi keahlian Otomatisasi dan Tata Kelola Perkantoran (OTKP) merupakan
                        salah
                        salah satu jurusan di Sekolah Menengah Kejuruan (SMK)
                        Padakembang yang memberikan bekal tentang berbagai informasi layanan dibidang administrasi baik
                        secara
                        pengetahuan, keterampilan, dan sikap</p>
                </div>
            </div>
            <div class="my_card_smk">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <h1>TATA BOGA</h1>
                    <p class="text-center">Tata boga merupakan salah satu disiplin ilmu pengelolaan masakan yang mempelajari
                        teknik penyajian makanan dan minuman dengan memperhatikan estetika, kualitas rasa dan keutuhan
                        nutrisi.
                        Bidang ini mencakup bagaimana makanan dan minuman disiapkan menjadi sebuah hidangan regional dan
                        nasional.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>COPYRIGHT ©2022</p>
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
    </script>
@endsection
