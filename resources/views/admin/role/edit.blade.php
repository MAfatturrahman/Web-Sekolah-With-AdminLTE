@extends('adminlte::page')
@extends('CSS.guru')

@section('content')
    <br>
    <div class="container">
        <div class="my_card">
            <form method="POST" action="{{ route('role.update', $role->id) }}">
                @csrf
                @method('PUT')
                <br><input class="form-control" style="width: 100%;" name="name" placeholder="Nama"
                    value="{{ $role->name }}" required><br>

                <div class="d-flex gap-2 flex-column flex-md-row">
                    {{-- Guru --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>Guru</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('view-guru', $permissions) ? 'checked' : '' }}
                                {{ in_array('view-guru', $permissions) ? 'checked' : '' }} name="permission[]"
                                value="view-guru">
                            <label for="role">view-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('create-guru', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="create-guru">
                            <label for="role">create-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('edit-guru', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="edit-guru">
                            <label for="role">edit-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('show-guru', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="show-guru">
                            <label for="role">show-guru</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('delete-guru', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="delete-guru">
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
                            <input type="checkbox" {{ in_array('view-petugas', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="view-petugas">
                            <label for="role">view-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('create-petugas', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="create-petugas">
                            <label for="role">create-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('edit-petugas', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="edit-petugas">
                            <label for="role">edit-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('show-petugas', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="show-petugas">
                            <label for="role">show-petugas</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('delete-petugas', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="delete-petugas">
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
                            <input type="checkbox" {{ in_array('view-murid', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="view-murid">
                            <label for="role">view-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('create-murid', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="create-murid">
                            <label for="role">create-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('edit-murid', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="edit-murid">
                            <label for="role">edit-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('show-murid', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="show-murid">
                            <label for="role">show-murid</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('delete-murid', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="delete-murid">
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
                            <input type="checkbox" {{ in_array('view-spp', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="view-spp">
                            <label for="role">view-spp</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('edit-spp', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="edit-spp">
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
                            <input type="checkbox" {{ in_array('view-berita', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="view-berita">
                            <label for="role">view-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('create-berita', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="create-berita">
                            <label for="role">create-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('edit-berita', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="edit-berita">
                            <label for="role">edit-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('show-berita', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="show-berita">
                            <label for="role">show-berita</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('delete-berita', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="delete-berita">
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
                            <input type="checkbox" {{ in_array('view-user-management', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="view-user-management">
                            <label for="role">view-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('create-user-management', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="create-user-management">
                            <label for="role">create-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('edit-user-management', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="edit-user-management">
                            <label for="role">edit-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('show-user-management', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="show-user-management">
                            <label for="role">show-user-management</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('delete-user-management', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="delete-user-management">
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
                            <input type="checkbox" {{ in_array('view-roles', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="view-roles">
                            <label for="role">view-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('create-roles', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="create-roles">
                            <label for="role">create-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('edit-roles', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="edit-roles">
                            <label for="role">edit-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('show-roles', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="show-roles">
                            <label for="role">show-roles</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('delete-roles', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="delete-roles">
                            <label for="role">delete-roles</label>
                        </div>
                    </div>
                    {{-- Roles End --}}

                    {{-- Audit --}}
                    <div class="d-flex flex-column lh-1">
                        <div class="form-group">
                            <h4>Audit</h4>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('view-audit', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="view-audit">
                            <label for="role">view-audit</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" {{ in_array('show-audit', $permissions) ? 'checked' : '' }}
                                name="permission[]" value="show-audit">
                            <label for="role">show-audit</label>
                        </div>
                    </div>
                    {{-- Audit End --}}
                </div>

                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" type="submit">Selesai</button>
                    <a class="btn btn-primary" href="{{ url('role') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
