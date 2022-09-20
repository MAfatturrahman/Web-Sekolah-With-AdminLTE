@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Profile</h2>
            @if ($user->id == 1)
                <div class="d-flex gap-3">
                    <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                    <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                </div>
            @else
                <form method="POST" action="{{ route('profil.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    @if (Session::has('alert'))
                        <div class="alert alert-danger">{{ Session::get('alert') }}</div>
                    @endif
                    <br><input class="form-control" style="width: 100%;" name="name" placeholder="Nama"
                        value="{{ $user->name }}" required><br>
                    <div class="d-flex gap-1">
                        <br><input class="form-control" name="email" placeholder="Email" value="{{ $user->email }}"
                            required readonly><br>
                        <br><input class="form-control" type="password" name="password" placeholder="********" required><br>
                    </div>
                    <br>
                    <button class="btn btn-info me-3" style="width: 100%" type="submit">Selesai</button>
                </form>
            @endif
        </div>
    </div>
@endsection
