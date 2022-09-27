@extends('layouts.index')
@extends('layouts.cssHomePages')
{{-- @extends('adminlte::page') --}}
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@endsection
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

    {{-- Table Prestasi --}}
    <div class="container">
        <div class="my_card" style="width: 100%;">
            <div class="card-body">
                @php
                    $heads = [['label' => 'No', 'no-export' => true, 'width' => 1], 'Nama Lengkap', 'Siswa/Guru', 'Kejuaraan', 'Bentuk', 'Tingkat', 'Tahun', 'Juara', 'Diselenggarakan'];
                    $no = 1;
                    
                    $dataPrestasi = [];
                    foreach ($datas as $prestasi) {
                        $dataPrestasi[] = [$no++, $prestasi->nama_lengkap, $prestasi->siswa_guru, $prestasi->kejuaraan, $prestasi->bentuk, $prestasi->tingkat, $prestasi->tahun, $prestasi->juara, $prestasi->tempat_penyelenggara, '<form></form>'];
                    }
                    
                    $config = [
                        'data' => $dataPrestasi,
                        'order' => [[1, 'asc']],
                        'columns' => [null, null, null, ['orderable' => false]],
                    ];
                @endphp
                <x-adminlte-datatable id="table1" head-theme="navbar navbar-white bg-white" :heads="$heads"
                    class="container">
                    @foreach ($config['data'] as $row)
                        <tr>
                            @foreach ($row as $cell)
                                <td>{!! $cell !!}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </x-adminlte-datatable>
            </div>
        </div>
    </div>
    {{-- End Table Prestasi --}}
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
