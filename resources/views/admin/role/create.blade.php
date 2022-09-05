@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <h2>Membuat Role</h2>
            <form method="POST" action="{{ url('role') }}">
                @csrf
                @if (Session::has('alert'))
                    <div class="alert alert-danger">{{ Session::get('alert') }}</div>
                @endif

                <input class="form-control" style="width: 100%;" type="text" name="name" placeholder="Nama Role"
                    required><br>

                <div class="d-flex gap-2 flex-column flex-md-row">
                    {{-- Guru --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>Guru</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-guru">
                            <label for="role">view-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="create-guru">
                            <label for="role">create-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="edit-guru">
                            <label for="role">edit-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="show-guru">
                            <label for="role">show-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="delete-guru">
                            <label for="role">delete-guru</label>
                        </div>
                    </div>
                    {{-- Guru End --}}

                    {{-- Petugas --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>Petugas</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-petugas">
                            <label for="role">view-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="create-petugas">
                            <label for="role">create-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="edit-petugas">
                            <label for="role">edit-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="show-petugas">
                            <label for="role">show-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="delete-petugas">
                            <label for="role">delete-petugas</label>
                        </div>
                    </div>
                    {{-- Petugas End --}}

                    {{-- Murid --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>Murid</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-murid">
                            <label for="role">view-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="create-murid">
                            <label for="role">create-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="edit-murid">
                            <label for="role">edit-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="show-murid">
                            <label for="role">show-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="delete-murid">
                            <label for="role">delete-murid</label>
                        </div>
                    </div>
                    {{-- Murid End --}}

                    {{-- SPP --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>SPP</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-spp">
                            <label for="role">view-spp</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="edit-spp">
                            <label for="role">edit-spp</label>
                        </div>
                    </div>
                    {{-- SPP End --}}

                    {{-- Berita --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>Berita</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-berita">
                            <label for="role">view-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="create-berita">
                            <label for="role">create-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="edit-berita">
                            <label for="role">edit-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="show-berita">
                            <label for="role">show-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="delete-berita">
                            <label for="role">delete-berita</label>
                        </div>
                    </div>
                    {{-- Berita End --}}

                    {{-- User-Management --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>User Management</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-user-management">
                            <label for="role">view-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="create-user-management">
                            <label for="role">create-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="edit-user-management">
                            <label for="role">edit-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="show-user-management">
                            <label for="role">show-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="delete-user-management">
                            <label for="role">delete-user-management</label>
                        </div>
                    </div>
                    {{-- User-Management End --}}

                    {{-- Roles --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>Roles</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-roles">
                            <label for="role">view-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="create-roles">
                            <label for="role">create-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="edit-roles">
                            <label for="role">edit-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="show-roles">
                            <label for="role">show-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="delete-roles">
                            <label for="role">delete-roles</label>
                        </div>
                    </div>
                    {{-- Roles End --}}

                    {{-- History --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>History</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="view-history">
                            <label for="role">view-history</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="role" name="permission[]" value="show-history">
                            <label for="role">show-history</label>
                        </div>
                    </div>
                    {{-- History End --}}
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('role') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
