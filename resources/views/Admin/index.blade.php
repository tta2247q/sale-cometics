<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/Admin/style.css') }}" type="text/css">

    {{--  --}}
    <link rel="stylesheet" href="assets/css/Admin/sidebar-menu.css">
    <link rel="stylesheet" href="assets/css/Admin/simplebar.css">
    <link rel="stylesheet" href="assets/css/Admin/prism.css">
    <link rel="stylesheet" href="assets/css/Admin/quill.snow.css">
    <link rel="stylesheet" href="assets/css/Admin/remixicon.css">
    <link rel="stylesheet" href="assets/css/Admin/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Admin/jsvectormap.min.css">
    <link rel="stylesheet" href="assets/css/Admin/style.css">

</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/admin.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/data-table.js"></script>
    <script src="assets/js/prism.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/echarts.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/fullcalendar.main.js"></script>
    <script src="assets/js/jsvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/custom/apexcharts.js"></script>
    <script src="assets/js/custom/echarts.js"></script>
    <script src="assets/js/custom/maps.js"></script>
    <script src="assets/js/custom/custom.js"></script>
</body>

</html>
