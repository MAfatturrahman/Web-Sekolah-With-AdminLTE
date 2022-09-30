<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{ url('/') }}"><i class="fa-solid fa-school me-2"></i>Sekolah
            Negeri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav text-light gap-2">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.fasilitas') }}">Fasilitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.jurusan') }}">Jurusan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.prestasi') }}">Prestasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.pelajaran') }}">Pelajaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.galeri') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.Ekstrakurikuler') }}">Ekstrakurikuler</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="nav-link text-light" href="{{ url('login') }}">Login</a>
            </div>
        </div>
    </div>
</nav>
