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
    <div class="flex flex-col h-screen justify-between">
        <div class="header">
            @include('layout.navbar')
        </div>


        <main class="mb-auto h-screen">
            @yield('section') 
        </main>

        <footer class="h-14 bg-gray-300">
            @include('layout.footer')
        </footer>
    </div>
</body>
</html>