@extends('layouts.index')
@extends('layouts.cssBerita')

@section('content')
    @foreach ($datas as $key => $values)
        <div class="container">
            <div class="my_card">
                <div class="card_thumbnail">
                    <img src="{{ $values->gambar }}">
                </div>
                <div class="card_content">
                    <h1 class="card_title" style="text-align: left">{{ $values->title }}</h1>
                    <p class="card_description" style="text-align: left">{{ $values->deskripsi }}</p>
                </div>
            </div>
        </div>
    @endforeach

    <div class="footer">
        <p>COPYRIGHT ©2022</p>
    </div>
@endsection

@section('script')
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
@endsection
