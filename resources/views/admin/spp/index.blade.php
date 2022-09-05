@extends('CSS.guru')
@extends('adminlte::page')

@section('content')
    <br>

    @if ($message = Session::get('success'))
        <div id="peringatan" class="alert alert-success">
            <p class="notif-create">{{ $message }}</p>
        </div>
    @endif

    <h2>Pembayaran SPP</h2>
    <div class="my_card" style="width: 100%; margin: auto;">
        <br>

        {{-- Table SPP --}}
        @php
            $heads = ['No', 'NIS', 'Name', 'Kelas', 'Jurusan', 'SPP', 'Tahun', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
            $no = 1;
            
            $dataMurid = [];
            foreach ($datas as $spp) {
                $btnBayar = '<a href="'.route('spp.edit', $spp->id).'" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa-solid fa-credit-card"></i></a>';
                $dataMurid[] = [$no++, $spp->nis, $spp->nama, $spp->kelas, $spp->jurusan, $spp->spp, $spp->tahun, '<form onsubmit="return confirm(\'Apa Kah Anda Yakin?\')" class="d-flex justify-content-center" method="POST" action="'.route('murid.destroy', $spp->id).'">' . csrf_field() . '<input type="hidden" name="_method" value="DELETE"/>' . $btnBayar . '</form></nobr>'];
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
        {{-- End Table SPP --}}
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
