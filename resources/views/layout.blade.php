<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    @vite('resources/css/style.css')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>{{ $title }} // {{ config('app.name')}}</title>
</head>
<body>
    <header>
        @include('layout.header')
        @include('layout.navbar')
    </header>


    <main>
        @yield('section')
    </main>

    <footer>
        
    </footer>
</div>
</body>
</html>