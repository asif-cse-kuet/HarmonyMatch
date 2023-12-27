<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('resources/views/Common/common.css') }}">
</head>

<body>

    <div class="nav_bar">
        <p>A</p>
        <p>B</p>
        <p>C</p>
    </div>

    <div>
        @if (Route::has('login'))
        <div>
            @auth
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
            <a href=" {{ route('login') }}">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register </a>
            @endif
            @endauth
        </div>
        @endif
    </div>
</body>

</html>