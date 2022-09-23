@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p class="notif-create">{{ $message }}</p>
        </div>
    @endif

    <div class="container">
        <div class="my_card">
            <h2>Edit Pengguna</h2>

            <form method="POST" action="{{ route('userManagement.update', $user->id) }}">
                @csrf
                @method('PUT')
                <br><input class="form-control" style="width: 100%;" name="name" placeholder="Nama"
                    value="{{ $user->name }}" required><br>
                <div class="d-flex gap-1">
                    <br><input class="form-control col-sm-6" name="email" placeholder="Email" value="{{ $user->email }}"
                        required><br>

                    <x-adminlte-select2 name="role" label-class="text-lightblue" igroup-size="md"
                        data-placeholder="Pilih Role ..." fgroup-class="col-sm-6">
                        <x-slot name="prependSlot">
                            <div class="input-group-text bg-gradient-info">
                                <i class="fas fa-fw fa-lock"></i>
                            </div>
                        </x-slot>
                        </option>
                        <option selected disabled value={{ old('name', $user->getRoleNames()[0]) }}>
                            {{ old('name', $user->getRoleNames()[0]) }}</option>
                        @foreach ($roles as $role)
                            @if ($role->id == 1)
                                <option disabled value="{{ $role->name }}">{{ $role->name }}</option>
                            @else
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endif
                        @endforeach
                    </x-adminlte-select2>
                </div>
                <input class="form-control" name="password" placeholder="Password" value="{{ $user->password }}" required
                    readonly hidden>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('userManagement') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
