<!-- resources/views/auth/register.blade.php -->
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
    <title>Register - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
    <!-- END: CSS Assets-->
</head>

<body>
    <div class="container mx-auto px-5 sm:px-10">
        <div class="flex flex-col min-h-screen justify-center items-center">

            <div class="bg-white px-5 py-8 rounded-md shadow-md w-full max-w-md">
                <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
                <form method="POST" action="{{ route('register') }}" class="space-y-4">
                    @csrf

                    <label for="name" class="block mb-2">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                        class="input input--lg border border-gray-300 w-full" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    <label for="email" class="block mb-2">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                        class="input input--lg border border-gray-300 w-full" required autocomplete="email">

                    @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    <label for="password" class="block mb-2">Password</label>
                    <input id="password" type="password" name="password"
                        class="input input--lg border border-gray-300 w-full" required autocomplete="new-password">

                    @error('password')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    <label for="password_confirmation" class="block mb-2">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="input input--lg border border-gray-300 w-full" required autocomplete="new-password">

                    <button type="submit" class="button button--lg w-full text-white bg-theme-1">Register</button>
                </form>
                <div class="mt-3 text-center">
                    <a href="{{ route('login') }}"
                        class="button button--lg w-full text-gray-700 border border-gray-300">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('dist/js/app.js') }}"></script>
    <!-- END: JS Assets-->
</body>

</html>