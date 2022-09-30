@extends('layouts.index')
@extends('layouts.cssHomePages')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="d-flex flex-column text-center">
            <h1>Prestasi</h1>
            <p>ini lah Prestasi yang telah di dapatkan oleh sekolah negeri kami</p>
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

    <div class="footer">
        <p>COPYRIGHT ©2022</p>
    </div>
@endsection
