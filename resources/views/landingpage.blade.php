<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/untan.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
    <title>Program | Merdeka Belajar Kampus Merdeka</title>
  </head>
  <body class="vh-100">
    <div id="logo">
        <div class="d-flex flex-row">
            <div class="d-flex flex-column">
                <img src="{{ asset('img/untan.png') }}" width="50px" alt="logo">
            </div>
            <div class="d-flex flex-column ms-2">
                <p class="mb-0 fw-bold">Universitas Tanjungpura</p>
                <p class="mb-0">Kalimantan Barat</p>
            </div>
        </div>
    </div>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-6 h-100 d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column title">
                    <h6 class="fw-normal">Selamat Datang di</h6>
                    <h1 class="fw-bold">SIAKAD <span class="coklat">Profesi Dokter</span></h1>
                    <h6 class="fw-normal">Universitas Tanjungpura</h6>
                    <div class="d-flex">
                        <a href="{{ route("get.login-dosen") }}" class="btn btn-login px-5 py-3 mt-2 me-2" style="width: fit-content" type="button"><iconify-icon data-icon="ant-design:login-outlined" style="font-size: 20px" class="me-1"></iconify-icon> Login Dosen</a>
                        <a href="{{ route("get.login-mahasiswa") }}" class="btn btn-login-mhs px-5 py-3 mt-2" style="width: fit-content" type="button"><iconify-icon data-icon="ant-design:login-outlined" style="font-size: 20px" class="me-1"></iconify-icon> Login Mahasiswa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100 d-none d-md-flex justify-content-center align-items-center">
                <img src="{{ asset('img/mahasiswa.png') }}" class="pt-5" height="100%" alt="gambar">
            </div>
        </div>
    </div>

    <footer>
        <p>&copy{{ date('Y') }} <span class="fw-bold coklat" style="">UPT. Teknologi Informasi dan Komunikasi</span> Universitas Tanjungpura</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  </body>
</html>
