@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container gap-4">
        <div class="my_card_history">

            <div class="d-flex justify-content-between mb-4">
                <div class="d-flex flex-column">
                    <h4>Nama User</h4>
                    <h5 class="history_nama">{{ $datas->user_type::find($datas->user_id)->name }}</h5>
                </div>

                <div class="d-flex flex-column">
                    <h4>Jenis Perubahan</h4>
                    <h5 class="history_nama">{{ $datas->event }}</h5>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div class="d-flex flex-column">
                    <h4>URL Perubahan</h4>
                    <h5 class="history_nama">{{ $datas->url }}</h5>
                </div>

                <div class="d-flex flex-column">
                    <h4>Tanggal Perubahan</h4>
                    <h5 class="history_nama">{{ $datas->created_at }}</h5>
                </div>
            </div>


            <div class="d-flex justify-content-between">
                <div class="d-flex flex-column">
                    <h4>Sebelum</h4>
                    <p>
                        @foreach (json_decode($datas->old_values) as $key => $value)
                            {{ $key . ':' . $value }}
                            <br />
                        @endforeach
                    </p>
                </div>

                <div class="d-flex flex-column">
                    <h4>Sesudah</h4>
                    <p>
                        @foreach (json_decode($datas->new_values) as $key => $value)
                            {{ $key . ':' . $value }}
                            <br />
                        @endforeach
                    </p>
                </div>
            </div>

            <a class="btn btn-primary" href="{{ url('history') }}">Back</a>
        </div><br>
    </div>
@endsection
