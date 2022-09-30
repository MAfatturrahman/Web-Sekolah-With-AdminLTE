@extends('layouts.index')
@extends('layouts.cssHomePages')

@section('content')
    @php
        $jumlahGuru = count($dataGuru);
        $jumlahPetugas = count($dataPetugas);
        $jumlahMurid = count($dataMurid);
        $jumlahPrestasi = count($dataPrestasi);
    @endphp

    <div class="img">
        <h1>Selamat Datang Di Website Sekolah Kami <br> Sekolah Negeri</h1>
    </div>

    <div class="sambutan">
        <p class="title-sambutan">
            Salam hangat dari kepala sekolah negeri
        </p>
        <p>Assalamu'alaikum Warahmatullahi Wabarakaatuh.
            Salam sejahtera untuk kita semua. Selamat datang di website sekolah negeri. Website ini dibangun sebagai sarana
            atau media informasi dan komunikasi sekolah, karena sejalan dengan perkembangan teknologi industri 4.0 yang
            berguna untuk memudahkan mencari informasi tentang sekolah negri. Kualitas layanan menjadi salah satu misi
            sekolah dan kaitannya dengan transparansi dan akuntabilitas sekolah.</p>
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
            <h3>Sejarah Sekolah Negeri</h3>
            <div class="my_card">
                <p>Persetujuan Renville yang ditandatangani pada tanggal 17 Januari 1948, membuka peluang bagi guru-guru
                    yang
                    tergabung dalam Serikat Guru Indonesia (SGI) untuk mendirikan SMP swasta yang diselenggarakan pada
                    petang
                    hari.<br><br>

                    Sekolah ini diberi nama SMP Petang. SMP tersebut diselenggarakan oleh SGI dan bertempat di Europese
                    Lagere
                    School, Logeweb 3 (Kini jalan Wastukencana).<br><br>

                    SMP Petang rencananya akan dibuka tanggal 17 Agustus 1948 yang dipimpin oleh Abdurrahman Natadiria.
                    Namun,
                    menjelang pembukaan ternyata Abdurrahman Natadiria ditangkap Belanda, akhirnya diputuskan bahwa untuk
                    sementara R. Soetardjo Sindoemintardjo ditunjuk sebagai kepala sekolah.<br><br>

                    Setelah Belanda melakukan Agresi Militer II pada 19 Desember 1948, peserta didk SMP Petang semakin
                    bertambah
                    banyak. Setelah sekolah berjalan beberapa bulan, kesulitan-kesulitan mulai muncul. Hal ini disebabkan
                    kurangnya perhatian dari SGI dan menyerahkan sepenuhnya tanggung jawab pengelolaan sekolah kepada kepala
                    sekolah dan guruguru SMP Petang, mengingat biaya untuk memenuhi kebutuhan tersebut tidak ada, dan
                    mengandalkan kesetiaan maupun kerelaan orang tua siswa juga tidak mungkin, karena para orang tua siswa
                    pin
                    baru saja kehilangan harta benda mereka akibat mengungsi. Maka, untuk mengatasi kesulitan dan mencari
                    jalan
                    keluarnya, R. Soetardjo Sindoemintardjo memprakarsai diadakannya suatu pertemuan pada 1 Mei 1949 yang
                    bertempat di Gedung Koperasi Simpan Pinjam Himpunan Saudara di Jalan Dalem Kaum Bandung.<br><br>

                    Pertemuan yang dilandasi semangat perjuangan itu dihadiri oleh tokoh pendidikan, sosial, koperasi,
                    wartawan,
                    dan orang tua siswa, serta perwakilan dari sekolah untuk membentuk panita yang akan merumuskan strategi
                    dan
                    rencana membentuk badan pengelola sekolah. Panitia tersebut terdiri atas : R. Jaman Sudjana Prawira,
                    Rochdi
                    Partaatmadja, Suryo Argawisastra, R.E. Soewitaatmadja, Wiriaatmadja, Sain Nuryokusumo, Sudirjdo,
                    Barastan
                    Wiriaatmadja, dan R. Soetardjo Sindoemintardjo (mewakili sekolah).<br><br>

                    Panitia itulah yang menyimpulkan dibentuknya suatu badan pengelola sekolah yang diberi nama “Badan
                    Perguruan
                    Indonesia” yang disingkat BPI dan berbentuk yayasan. Susunan kepengurusan yayasan yang disepakati adalah
                    Ketua I : R. Jaman Sudjana Prawira, Ketua II : R. Sajoeti Wangsadikoesoemah, Ketua III : R. Soetardjo
                    Sindoemintardjo, Sekretaris : Rochdi Partaatmadja, Bendahara : Soeryo Argawisatra.<br><br></p>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <div class="jumlah">
            <div class="d-flex flex-column align-items-center flex-md-row justify-content-md-around">
                <div class="d-flex flex-column">
                    <h5>Guru</h5>
                    <p>Guru yang Dimiliki Oleh Sekolah Negeri</p>
                    <h6><i class="fa-solid fa-chalkboard-user me-3"></i>{{ $jumlahGuru }}</h6>
                </div>
                <div class="d-flex flex-column">
                    <h5>Petugas</h5>
                    <p>Petugas Yang Dimiliki Oleh Sekolah Negeri</p>
                    <h6><i class="fa-solid fa-stamp me-3"></i>{{ $jumlahPetugas }}</h6>
                </div>
                <div class="d-flex flex-column">
                    <h5>Murid</h5>
                    <p>Petugas Yang Dimiliki Oleh Sekolah Negeri</p>
                    <h6><i class="fa-solid fa-graduation-cap me-3"></i>{{ $jumlahMurid }}</h6>
                </div>
                <div class="d-flex flex-column">
                    <h5>Prestasi</h5>
                    <P>Prestasi Yang Dimiliki Oleh Sekolah Negeri</P>
                    <h6><i class="fa-solid fa-trophy me-3"></i>{{ $jumlahPrestasi }}</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="body-top-space">
            <h3>Visi Misi Kami</h3>
        </div>
    </div>

    <div class="d-flex justify-content-between flex-column flex-md-row container gap-3">
        <div class="my_card_misi">
            <h1>VISI</h1>
            <p class="text-center">Menjadikan penyelenggara pendidikan berkualitas dan terpercaya.</p>
        </div>

        <div class="my_card_misi">
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


    <div class="footer">
        <p>COPYRIGHT ©2022</p>
    </div>
@endsection
