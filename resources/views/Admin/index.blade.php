<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/Admin/style.css') }}" type="text/css">

    {{-- Chuyển hết thành đường dẫn tuyệt đối cho anh

    vd: {{ asset('assets/css/admin/style.css') }} --}}


    <link rel="stylesheet" href="{{asset('assets/css/Admin/sidebar-menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Admin/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Admin/prism.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Admin/quill.snow.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Admin/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Admin/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Admin/jsvectormap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Admin/style.css')}}">

</head>

<body class="bg-body-bg">
    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">T</span>
                <span class="d-inline-block">H</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">N</span>
                <span class="d-inline-block">H</span>
            </div>
        </div>
    </div>
    @include('section.sidebar')
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            @include('section.header_admin')
            @yield('content')
            @include('section.footer_admin')
        </div>
    </div>
     <button class="btn btn-primary theme-settings-btn p-0 position-fixed z-2 text-center rounded-circle"
            style="bottom: 24px; right: 24px; width: 56px; height: 56px; line-height: 54px;" type="button"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <i class="text-white ri-settings-3-fill fs-28" data-bs-toggle="tooltip" data-bs-placement="left"
                data-bs-title="Click On Theme Settings"></i>
        </button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/admin.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/quill.min.js')}}"></script>
    <script src="{{asset('assets/js/data-table.js')}}"></script>
    <script src="{{asset('assets/js/prism.js')}}"></script>
    <script src="{{asset('assets/js/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/js/echarts.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/fullcalendar.main.js')}}"></script>
    <script src="{{asset('assets/js/jsvectormap.min.js')}}"></script>
    <script src="{{asset('assets/js/world-merc.js')}}"></script>
    <script src="{{asset('assets/js/custom/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/custom/echarts.js')}}"></script>
    <script src="{{asset('assets/js/custom/maps.js')}}"></script>
    <script src="{{asset('assets/js/custom/custom.js')}}"></script>
</body>

</html>
