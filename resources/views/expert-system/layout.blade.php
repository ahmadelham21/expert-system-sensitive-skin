<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Dashboard')</title>
</head>

<body class="app">
    <div class="flex">
        <!-- BEGIN: Content -->
        @yield('content')
        <!-- END: Content -->
    </div>
</body>

</html>