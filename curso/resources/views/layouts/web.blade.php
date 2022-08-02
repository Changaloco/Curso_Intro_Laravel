<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
</head>

<body>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1">
        </div>
        <nav class="bg-blue-800">
            <a href="{{ route('home') }}">
                <img class="h-8 mx-auto" src="https://i.kym-cdn.com/photos/images/newsfeed/002/074/984/dec.png"
                    alt=""></a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard') }}" class="ml-4 text-sm text-gray-700 underline">
                Dashboard
            </a>
        @else
            <a href="{{ url('login') }}" class="ml-4 text-sm text-gray-700 underline">
                Login
            </a>
            <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">
                Register
            </a>
            @endif
        </footer>
    </body>

    </html>
