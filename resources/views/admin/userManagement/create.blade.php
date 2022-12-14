@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Tambah Pengguna</h2>

            <form method="POST" action="{{ route('userManagement.store') }}">
                @csrf
                @if (Session::has('alert'))
                    <div class="alert alert-danger">{{ Session::get('alert') }}</div>
                @endif

                <input class="form-control" style="width: 100%;" type="text" name="name" placeholder="Nama" required><br>
                <div class="d-flex">
                    <br><input class="form-control me-1" style="width: 50%;" type="text" name="email"
                        placeholder="Email" required><br>
                    <br><input class="form-control ms-1 me-1" style="width: 50%;" type="text" name="password"
                        placeholder="Password" required>
                </div>

                <x-adminlte-select2 name="role" label="Role" label-class="text-lightblue" igroup-size="lg"
                    data-placeholder="Pilih Role ...">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-info">
                            <i class="fas fa-fw fa-lock"></i>
                        </div>
                    </x-slot>
                    </option>
                    <option selected disabled>Pilih Role</option>
                    @foreach ($roles as $role)
                        @if ($role->id == 1)
                            <option disabled value="{{ $role->name }}">{{ $role->name }}</option>
                        @else
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endif
                    @endforeach
                </x-adminlte-select2>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('userManagement') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
