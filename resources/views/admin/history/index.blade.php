@extends('adminlte::page')
@extends('CSS.pengguna')

@section('content')
    <br>
    <div class="badan">
        <div class="container">
            <p class="judul">History</p>

            <div class="my_card">

                {{-- Table Petugas --}}
                @php
                    $heads = [['label' => 'No', 'no-export' => true, 'width' => 5], 'Nama', 'Event', 'Nilai Lama', 'Nilai Baru', 'URL', 'Tanggal', ['label' => 'Actions', 'no-export' => true, 'width' => 5]];
                    $no = 1;
                    
                    $dataHistory = [];
                    
                    foreach ($datas as $history) {
                        $oldValues = '';
                        $newValues = '';
                        $countOldValues = count(json_decode($history->old_values, true));
                        $countNewValues = count(json_decode($history->new_values, true));
                        $user = $history->user_type;
                    
                        if ($countOldValues <= 0) {
                            $oldValues .= '-';
                        } elseif ($countOldValues >= 4) {
                            $oldValues .= 'Data lebih dari 4';
                        } else {
                            foreach (json_decode($history->old_values) as $key => $value) {
                                $oldValues .= $key . ':' . $value . '<br/>';
                            }
                        }
                    
                        if ($countNewValues <= 0) {
                            $newValues .= '-';
                        } elseif ($countNewValues >= 4) {
                            $newValues .= 'Data lebih dari 4';
                        } else {
                            foreach (json_decode($history->new_values) as $key => $value) {
                                $newValues .= $key . ': ' . $value . '<br/>';
                            }
                        }
                    
                        $btnDetails = '<a href="'.route('history.show', $history->id).'" class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details"><i class="fa fa-lg fa-fw fa-eye"></i></a>';
                        $dataHistory[] = [$no++, $user::find($history->user_id)->name, $history->event, $oldValues, $newValues, $history->url, $history->created_at, '<form class="d-flex justify-content-center" >' . $btnDetails . '</form>'];
                    }
                    
                    $config = [
                        'data' => $dataHistory,
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
        </div><br>
    </div>
@endsection

{{-- // if (count($history->new_values) >= 4) {
    //     $newValues = 'Data Lebih Dari 4 kolom';
    // } else {
    //     $newValues .= $key . ':' . $value . '<br/>';
    // }
    // if (json_decode($history->new_values) >= 4) {
    //     $newValues = 'Data Lebih Dari 4 kolom';
    // } else {
    //     foreach (json_decode($history->new_values) as $key => $value) {
    //         $newValues .= $key . ':' . $value . '<br/>';
    //     }
    // } --}}
