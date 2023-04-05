<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS -->
    <link rel="stylesheet" href="{{ asset('adminLteAssets/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminLteAssets/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLteAssets/dist/css/adminlte.min.css') }}" >
    <link href="{{ asset('summer-note/summernote-bs4.min.css') }}" rel="stylesheet">
    <title>@yield('meta-tag')</title>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.part.navbar')
        @include('admin.part.sidebar')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('meta-tag')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">@yield('meta-tag')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content2')
        </div>
    </div>
    <script src="{{ asset('adminLteAssets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/popper/umd/popper.min.js') }}" ></script>
    <script src="{{ asset('adminLteAssets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}" ></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminLteAssets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('summer-note/summernote-bs4.min.js') }}"></script>
    @if (session('alert'))
        <script>
            Swal.fire({
                title: "{{ session('alert')['title'] }}",
                text: "{{ session('alert')['text'] }}",
                icon: "{{ session('alert')['icon'] }}",
                // confirmButtonText: 'done'
            })
        </script>
    @endif
    @yield('scripts')

</body>

</html>
