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
                    @if ($message = Session::get('failed'))
                        <div id="peringatan" class="alert alert-danger">
                            <p class="notif-create">{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div id="peringatan" class="alert alert-success">
                            <p class="notif-create">{{ $message }}</p>
                        </div>
                    @endif

                    <div class="d-flex gap-3 mb-2">
                        <input class="form-control" name="name" placeholder="Nama" value="{{ $user->name }}" required>
                        <input class="form-control" name="email" placeholder="Email" value="{{ $user->email }}" required
                            readonly>
                    </div>

                    <div class="d-flex gap-2 mb-4">
                        <div class="d-flex flex-column">
                            <label>Password Lama</label>
                            <input class="form-control" type="password" name="password" placeholder="********" required>
                            <label>Password Baru</label>
                            <input class="form-control" id="passwordBaru" type="password" name="password_baru"
                                placeholder="********">
                            <label id="ulangiPasswordLabel">Ulangi Password</label>
                            <input class="form-control" id="ulangiPassword" type="password" name="password_baru"
                                placeholder="********">
                            <div id="ulangiPasswordFeedback" class="invalid-feedback">
                                Password tidak cocok
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-info me-3" style="width: 100%" type="submit">Selesai</button>
                </form>
            @endif
        </div>
    </div>
@endsection

@section('js')
    <script>
        const massage = document.getElementById('peringatan');

        massage !== null && setTimeout(() => {
            massage.style.display = 'none'
        }, 3000);

        const ulangiPassword = $('#ulangiPassword');
        const passwordBaru = $('#passwordBaru');

        $('#ulangiPasswordLabel, #ulangiPassword').hide();

        $('#ulangiPassword, #passwordBaru').on('keyup', () => {
            if (ulangiPassword.val().length > 0) {
                ulangiPassword.addClass('is-invalid')
                if (ulangiPassword.val() === passwordBaru.val()) return ulangiPassword.removeClass('is-invalid')
            }
        })

        passwordBaru.on('keyup', function() {
            if ($(this).val().length > 0) return $('#ulangiPasswordLabel, #ulangiPassword').show().fadeIn();
            if ($(this).val().length <= 0) return $(
                '#ulangiPasswordLabel, #ulangiPassword, #ulangiPasswordFeedback').hide().fadeOut();
        })
    </script>
@endsection
