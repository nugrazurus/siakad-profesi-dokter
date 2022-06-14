<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title') | SIAKAD Profesi Dokter</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/node_modules/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/node_modules/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/node_modules/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- endinject -->
  <!-- plugin css for this page -->
<link rel="stylesheet" href="{{ asset('assets/node_modules/jquery-toast-plugin/dist/jquery.toast.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
  @stack('css')
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body class="sidebar-fixed">
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('Layout.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">

        @include('Layout.sidebar')
        <div class="content-wrapper">
            @yield('content')
            <!-- Modal -->
            <div class="modal fade" id="modal-logout" tabindex="-1" aria-labelledby="modal-logoutLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modal-logoutLabel">Logout</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="d-flex flex-column align-items-center">
                            <h4>Anda Yakin Ingin Keluar ?</h4>
                            <a onclick="document.getElementById('logout').submit()" href="#" class="btn btn-danger px-5 py-3 w-50 mt-5" type="button">Ya <form id="logout" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form></a>
                            <a type="button" data-bs-dismiss="modal" aria-label="Close" class="text-danger mt-2">Tidak</a>
                        </div>
                    </div>

                  </div>
                </div>
              </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        @include('Layout.footer')
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- endinject -->
  <!-- Plugin js for this page-->
<script src="{{ asset('assets/node_modules/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/misc.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>

  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

  <script>
      $(document).ready(function () {
        const message = "{!! Session::get('message') ?? '' !!}"
        const status = "{!! Session::get('status') ?? '' !!}"
        if (status === 'Berhasil' || status === 'success') {
            let payload = {
                heading: status,
                text: message
            }
            showSuccessToast(payload)
        } else if (status !== '') {
            let payload = {
                heading: status,
                text: message
            }
            showDangerToast(payload)
        }
      });
      function showSuccessToast(payload) {
        resetToastPosition();
        console.log(payload)
        $.toast({
            heading: payload.heading,
            text: payload.text,
            showHideTransition: 'slide',
            icon: 'success',
            loaderBg: '#f96868',
            position: 'top-right'
        })
    }
      function showWarningToast(payload) {
        resetToastPosition();
        console.log(payload)
        $.toast({
            heading: payload.heading,
            text: payload.text,
            showHideTransition: 'slide',
            icon: 'warning',
            loaderBg: '#57c7d4',
            position: 'top-right'
        })
    }
      function showInfoToast(payload) {
        resetToastPosition();
        console.log(payload)
        $.toast({
            heading: payload.heading,
            text: payload.text,
            showHideTransition: 'slide',
            icon: 'info',
            loaderBg: '#46c35f',
            position: 'top-right'
        })
    }
      function showDangerToast(payload) {
        resetToastPosition();
        console.log(payload)
        $.toast({
            heading: payload.heading,
            text: payload.text,
            showHideTransition: 'slide',
            icon: 'error',
            loaderBg: '#f2a654',
            position: 'top-right'
        })
    }
    function resetToastPosition() {
        $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
        $(".jq-toast-wrap").css({"top": "", "left": "", "bottom":"", "right": ""});
    }
  </script>
  @stack('js')
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
