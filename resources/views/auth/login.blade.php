<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Login - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- END: CSS Assets-->
</head>

<body>
    <div class="container mx-auto px-5 sm:px-10">
        <div class="flex flex-col min-h-screen justify-center items-center">

            <div class="bg-white px-5 py-8 rounded-md shadow-md w-full max-w-md">
                <h2 class="text-2xl font-bold text-center mb-6">Sign In</h2>


                @if ($errors->any())
                <div id="alert-message" class="rounded-md flex items-center px-5 py-4 mb-2 bg-theme-6 text-white">

                    @foreach ($errors->all() as $error)
                    <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i>
                    {{ $error }}
                    <i id="alert-close" data-feather="x" class="w-4 h-4 ml-auto cursor-pointer"></i>
                    @endforeach
                </div>
                @endif
                <div class="text-gray-500 text-center mb-6">A few more clicks to sign in to your account. Manage
                    all
                    your e-commerce accounts in one place</div>
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <input type="text" name="email" class="input input--lg border border-gray-300 w-full"
                        placeholder="Email" required>
                    <input type="password" name="password" class="input input--lg border border-gray-300 w-full"
                        placeholder="Password" required>

                    <div class="flex justify-between text-gray-700 text-sm mt-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" class="input border mr-2" id="remember-me">
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>

                    </div>
                    <div class="mt-5">
                        <button type="submit" class="button button--lg w-full text-white bg-theme-1">Login</button>
                    </div>
                </form>
                <div class="mt-5 text-center">
                    <a href="{{ route('register') }}" class="button button--lg w-96 text-white bg-theme-1">Sign
                        up</a>
                </div>
                <div class="mt-10 text-gray-700 text-center">
                    By signing up, you agree to our
                    <br>
                    <a class="text-theme-1" href="#">Terms and Conditions</a> & <a class="text-theme-1" href="#">Privacy
                        Policy</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>