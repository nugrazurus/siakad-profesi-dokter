<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/untan.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/node-modules/jquery-toast-plugin/jquery.toast.min.css') }}">

    <title>Login | Merdeka Belajar Kampus Merdeka</title>
  </head>
  <body class="vh-100">
    <div class="row h-100">
        <div class="col-md-6 h-100 d-none d-md-flex align-items-center bg-login justify-content-center">
            <div class="d-flex flex-column title text-white">
                <h6 class="fw-normal">Selamat Datang di </h6>
                <h1 class="fw-bold">SIAKAD <span class="coklat">Profesi Dokter</span></h1>
                <h6 class="fw-normal">Universitas Tanjungpura</h6>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column w-75">
                <h4 class="fw-bold mb-0">Form Login</h4>
                <p class="text-black-50">Silahkan masukkan username (NIP), password di form berikut dengan benar </p>
                <form action="{{ route('post.login-dosen') }}" method="POST" enctype="application/x-www-form-urlencoded">
                    @csrf
                    @if (\Session::get('message') != null)
                        <div class="alert alert-danger" role="alert">
                            {{ \Session::get('message') }}
                        </div>
                    @endif
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
                        <label for="floatingInput">Username / NIP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <button class="btn btn-login px-5 py-3 mt-2" style="width: fit-content" type="submit"><iconify-icon data-icon="ant-design:login-outlined" style="font-size: 20px" class="me-1"></iconify-icon> Login</button>
                        <a href="{{ url('/') }}" class="kembali" style="color: #E08686;text-decoration: none;"><iconify-icon data-icon="akar-icons:chevron-left" style="font-size: 20px" class="me-1"></iconify-icon> Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  </body>
</html>
