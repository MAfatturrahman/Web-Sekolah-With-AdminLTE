@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container gap-4">
        <div class="my_card">
            <h2 class="form-control mb-4" style="width: 100%;" name="name" readonly>
                {{ $user->name }}
            </h2>
            <div class="d-flex mb-4 gap-1">
                <h2 class="form-control" name="email" readonly>{{ $user->email }}
                </h2>
                <h2 class="form-control" name="role" readonly>{{ $user->getRoleNames()[0] }}
                </h2>
            </div>
            <a class="btn btn-primary" href="{{ url('userManagement') }}">Back</a>
        </div>
    </div>
@endsection
