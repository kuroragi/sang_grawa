<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SANG GRAWA') }} - @yield('title', 'Sistem Angkot Gratis')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- SANG GRAWA Custom Styles -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Page Specific Styles -->
    @stack('styles')
</head>

<body class="@yield('body-class', '')">
    @include('layouts.partials.sidebar')
    <!-- Main Content Wrapper -->
    <div class="content-wrapper">

        @include('layouts.partials.topnav')


        <!-- Page Content -->
        <main class="content">
            @yield('content')
        </main>
    </div>

    @include('layouts.partials.foot')

</body>

</html>
