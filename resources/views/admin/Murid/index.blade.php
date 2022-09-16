@extends('CSS.guru')
@extends('adminlte::page')

@section('content')
    <br>

    @if ($message = Session::get('success'))
        <div id="peringatan" class="alert alert-success">
            <p class="notif-create">{{ $message }}</p>
        </div>
    @endif

    <div class="tambah">
        <a class="btn btn-success mb-2" href="{{ route('murid.create') }}">Tambah</a>
    </div>
    <div class="my_card" style="width: 100%; margin: auto;">
        <br>


        {{-- Table Murid --}}
        @php
            $heads = ['No', 'NIS', 'Name', 'Umur', 'Kelas', 'Jurusan', 'JK', 'Tanggal Lahir', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataMurid = [];
            foreach ($datas as $murid) {
                $btnEdit = '<a href="' . route('murid.edit', $murid->id) . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></a>';
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>';
                $btnDetails = '<a href="' . route('murid.show', $murid->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
                $dataMurid[] = [$no++, $murid->nis, $murid->nama, $murid->umur, $murid->kelas, $murid->jurusan, $murid->jk, $murid->tanggal_lahir, '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="' . route('murid.destroy', $murid->id) . '">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnEdit . $btnDelete . $btnDetails . '</form></nobr>'];
            }
            
            $config = [
                'data' => $dataMurid,
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
        {{-- End Table Murid --}}
    </div>
@endsection

@section('js')
    <script>
        const massage = document.getElementById('peringatan');

        massage !== null && setTimeout(() => {
            massage.style.display = 'none'
        }, 3000);
    </script>
@endsection
