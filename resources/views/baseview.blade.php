<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- css & js -->
        <script src="/js/main.js" defer></script>
        <link rel="stylesheet" href="/css/main.css">
    
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
        <!-- iconify -->
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    
        <title>@yield('title')</title>
    </head>
    <!-- if is blocked -->
    @if(Auth::user()->role == 'blocked')
        <body class="blockedBody">
            <h1>Sorry, u bent verbannen</h1>
            <p>Als u denkt dat dit een fout is, neem dan contact met ons op.</p>
            <!-- log out -->
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="redButton">Uitloggen</button>
            </form>
        </body>
    @else
        @yield('body')
    @endif
</html>
