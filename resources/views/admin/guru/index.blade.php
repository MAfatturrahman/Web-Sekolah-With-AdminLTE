@extends('CSS.guru')
@extends('adminlte::page')

@section('content')
    <br>

    @if ($message = Session::get('success'))
        <div id="peringatan" class="alert alert-success">
            <p class="notif-create">{{ $message }}</p>
        </div>
    @endif

    @if (auth()->user()->can('create-guru'))
        <div class="tambah">
            <a class="btn btn-success mb-2" href="{{ route('guru.create') }}">Tambah</a>
        </div>
    @endif

    <div class="my_card" style="width: 100%; margin: auto;"><br>

        {{-- Table Guru --}}
        @php
            $heads = [['label' => 'No', 'no-export' => true, 'width' => 1], 'NIP', 'Umur', 'Matkul', 'Nama', 'Tanggal Lahir', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataGuru = [];
            foreach ($datas as $guru) {
                $btnEdit = auth()
                    ->user()
                    ->can('edit-guru')
                    ? '<a href="' . route('guru.edit', $guru->id) . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></a>'
                    : '';
            
                $btnDelete = auth()
                    ->user()
                    ->can('delete-guru')
                    ? '<button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>'
                    : '';
            
                $btnDetails = auth()
                    ->user()
                    ->can('show-guru')
                    ? '<a href="' . route('guru.show', $guru->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>'
                    : '';
            
                $dataGuru[] = [$no++, $guru->nip, $guru->umur, $guru->matkul, $guru->nama, $guru->tanggal_lahir, '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="' . route('guru.destroy', $guru->id) . '">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnEdit . $btnDelete . $btnDetails . '</form></nobr>'];
            }
            
            $config = [
                'data' => $dataGuru,
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
        {{-- End Table Guru --}}
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
