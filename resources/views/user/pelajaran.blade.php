@extends('layouts.index')
@extends('layouts.cssHomePages')

@section('content')
    <div class="container">
        <h4 class="text-center mt-3">SMK</h4>
        <div class="card_pelajaran">
            @foreach ($datas as $pelajaran)
                @if ($pelajaran->sma_smk === 'SMK')
                @endif
            @endforeach

            <h5>RPL</h5>
            @foreach ($datas as $pelajaran)
                @if ($pelajaran->jurusan === 'RPL')
                    <div class="d-flex flex-column">
                        <h6>{{ $pelajaran->mata_pelajaran }}</h6>
                        <p>- {{ $pelajaran->deskripsi }}</p>
                    </div>
                @endif
            @endforeach

            <h5>TKJ</h5>
            @foreach ($datas as $pelajaran)
                @if ($pelajaran->jurusan === 'TKJ')
                    <div class="d-flex flex-column">
                        <h6>{{ $pelajaran->mata_pelajaran }}</h6>
                        <p>- {{ $pelajaran->deskripsi }}</p>
                    </div>
                @endif
            @endforeach

            <h5>OTKP</h5>
            @foreach ($datas as $pelajaran)
                @if ($pelajaran->jurusan === 'OTKP')
                    <div class="d-flex flex-column">
                        <h6>{{ $pelajaran->mata_pelajaran }}</h6>
                        <p>- {{ $pelajaran->deskripsi }}</p>
                    </div>
                @endif
            @endforeach

            <h5>TATA BOGA</h5>
            @foreach ($datas as $pelajaran)
                @if ($pelajaran->jurusan === 'TATA BOGA')
                    <div class="d-flex flex-column">
                        <h6>{{ $pelajaran->mata_pelajaran }}</h6>
                        <p>- {{ $pelajaran->deskripsi }}</p>
                    </div>
                @endif
            @endforeach
        </div>

        <h4 class="text-center mt-3">SMA</h4>
        <div class="card_pelajaran">
            @foreach ($datas as $pelajaran)
                @if ($pelajaran->sma_smk === 'SMA')
                @endif
            @endforeach

            @foreach ($datas as $pelajaran)
                @if ($pelajaran->jurusan === 'IPA')
                    <h5>IPA</h5>
                    <h6>{{ $pelajaran->mata_pelajaran }}</h6>
                    <p>- {{ $pelajaran->deskripsi }}</p>
                @endif
            @endforeach

            @foreach ($datas as $pelajaran)
                @if ($pelajaran->jurusan === 'IPS')
                    <h5>IPS</h5>
                    <h6>{{ $pelajaran->mata_pelajaran }}</h6>
                    <p>- {{ $pelajaran->deskripsi }}</p>
                @endif
            @endforeach
        </div>
    </div>

    <div class="footer">
        <p>COPYRIGHT ©2022</p>
    </div>
@endsection
