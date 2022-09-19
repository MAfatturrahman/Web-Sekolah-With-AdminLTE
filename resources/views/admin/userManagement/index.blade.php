@extends('adminlte::page')
@extends('CSS.pengguna')

@section('content')
    <div class="badan">
        <div class="container">
            <br>

            @if ($message = Session::get('success'))
                <div id="peringatan" class="alert alert-success">
                    <p class="notif-create">{{ $message }}</p>
                </div>
            @endif

            <p class="judul">Tentang Pengguna</p>

            @if (auth()->user()->can('create-create-user-management'))
                <div class="tambah">
                    <a class="btn btn-success mb-2" href="{{ route('userManagement.create') }}">Tambah</a>
                </div>
            @endif
            <div class="my_card">

                {{-- Table Petugas --}}
                @php
                    $heads = [['label' => 'No', 'no-export' => true, 'width' => 5], 'Name', 'Email', 'Roles', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
                    $no = 1;
                    
                    $dataUser = [];
                    foreach ($datas as $user) {
                        $btnEdit = auth()
                            ->user()
                            ->can('edit-user-management')
                            ? '<a href="' . route('userManagement.edit', $user->id) . '" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit" ><i class="fa fa-lg fa-fw fa-pen"></i></a>'
                            : '';
                    
                        $btnDelete = auth()
                            ->user()
                            ->can('delete-user-management')
                            ? '<button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit" title="Delete"><i class="fa fa-lg fa-fw fa-trash"></i></button>'
                            : '';
                    
                        $btnDetails = auth()
                            ->user()
                            ->can('show-user-management')
                            ? '<a href="' . route('userManagement.show', $user->id) . '" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>'
                            : '';
                    
                        if ($user->id == 1) {
                            $dataUser[] = [$no++, $user->name, $user->email, $user->getRoleNames()[0], '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="' . route('userManagement.destroy', $user->id) . '">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnDetails . '</form></nobr>'];
                        } else {
                            $dataUser[] = [$no++, $user->name, $user->email, $user->getRoleNames()[0], '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="' . route('userManagement.destroy', $user->id) . '">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnEdit . $btnDelete . $btnDetails . '</form></nobr>'];
                        }
                    }
                    
                    $config = [
                        'data' => $dataUser,
                        'order' => [[1, 'asc']],
                        'columns' => [null, null, null, ['orderable' => false]],
                    ];
                @endphp

                {{-- Minimal example / fill data using the component slot --}}
                <x-adminlte-datatable id="table1" head-theme="navbar navbar-dark bg-primary" :heads="$heads">
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
@endsection

@section('js')
    <script>
        const massage = document.getElementById('peringatan');

        massage !== null && setTimeout(() => {
            massage.style.display = 'none'
        }, 3000);
    </script>
@endsection
