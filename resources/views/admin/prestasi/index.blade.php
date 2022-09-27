@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>

    @if ($message = Session::get('success'))
        <div id="peringatan" class="alert alert-success">
            <p class="notif-create">{{ $message }}</p>
        </div>
    @endif

    @if (auth()->user()->can('create-prestasi'))
        <div class="tambah">
            <a class="btn btn-success mb-2" href="{{ route('prestasi.create') }}">Tambah</a>
        </div>
    @endif

    <div class="my_card" style="width: 100%; margin: auto;">
        {{-- Table Prestasi --}}
        @php
            $heads = [['label' => 'No', 'no-export' => true, 'width' => 1], 'Nama Lengkap', 'Siswa/Guru', 'Kejuaraan', 'Bentuk', 'Tingkat', 'Tahun', 'Juara', 'Diselenggarakan', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataPrestasi = [];
            foreach ($datas as $prestasi) {
                $btnEdit = auth()
                    ->user()
                    ->can('edit-prestasi')
                    ? '<a href="' . route('prestasi.edit', $prestasi->id) . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></a>'
                    : '';
            
                $btnDelete = auth()
                    ->user()
                    ->can('delete-prestasi')
                    ? '<button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>'
                    : '';
            
                $btnDetails = auth()
                    ->user()
                    ->can('show-prestasi')
                    ? '<a href="' . route('prestasi.show', $prestasi->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>'
                    : '';
            
                $dataPrestasi[] = [$no++, $prestasi->nama_lengkap, $prestasi->siswa_guru, $prestasi->kejuaraan, $prestasi->bentuk, $prestasi->tingkat, $prestasi->tahun, $prestasi->juara, $prestasi->tempat_penyelenggara, '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="' . route('prestasi.destroy', $prestasi->id) . '">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnEdit . $btnDelete . $btnDetails . '</form></nobr>'];
            }
            
            $config = [
                'data' => $dataPrestasi,
                'order' => [[1, 'asc']],
                'columns' => [null, null, null, ['orderable' => false]],
            ];
        @endphp

        <x-adminlte-datatable id="table1" head-theme="navbar navbar-dark bg-primary" :heads="$heads">
            @foreach ($config['data'] as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{!! $cell !!}</td>
                    @endforeach
                </tr>
            @endforeach
        </x-adminlte-datatable>
        {{-- End Table Prestasi --}}
    </div>
    <br>
@endsection

@section('js')
    <script>
        const massage = document.getElementById('peringatan');

        massage !== null && setTimeout(() => {
            massage.style.display = 'none'
        }, 3000);
    </script>
@endsection
