@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>

    @if ($message = Session::get('success'))
        <div id="peringatan" class="alert alert-success">
            <p class="notif-create">{{ $message }}</p>
        </div>
    @endif

    <div class="tambah">
        <a class="btn btn-success mb-2" href="{{ route('berita.create') }}">Tambah</a>
    </div>
    <div class="my_card" style="width: 100%; margin: auto;">
        <br>


        {{-- Table Berita --}}
        @php
            $heads = [['label' => 'No', 'no-export' => true, 'width' => 1], 'Gambar', 'Title', 'Deskripsi', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataBerita = [];
            foreach ($datas as $berita) {
                $btnEdit = '<a href="'.route('berita.edit', $berita->id).'" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></a>';
                $btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>';
                $btnDetails = '<a href="'.route('berita.show', $berita->id).'" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
                $dataBerita[] = [$no++, '<img src="'.$berita->gambar.'">', $berita->title, $berita->deskripsi, '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="'.route('berita.destroy', $berita->id).'">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnEdit . $btnDelete . $btnDetails . '</form></nobr>'];
            }
            
            $config = [
                'data' => $dataBerita,
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
        {{-- End Table Berita --}}
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
