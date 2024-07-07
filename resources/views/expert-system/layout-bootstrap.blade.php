<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/bootstrap.css', 'resources/js/init_bootstrap.js'])
    <title>@yield('title', 'Dashboard')</title>
</head>

<body class="app">
    @include('expert-system.navbar')
    <div class="flex">
        <!-- BEGIN: Content -->
        @yield('content')
        <!-- END: Content -->
    </div>
</body>

</html>