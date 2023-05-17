<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TecGram</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-300">
        @auth
        @include('muro')
    @endauth

    @guest
        @include('menu') {{-- TODO Para meter el contenido de un archivo sin section o extends, es @include --}}
    @endguest
        <main class="container mx-auto mt-10">
            <h1 class="font-black text-center text-2xl mb-10">@yield('titulo')</h1>
            @yield('contenido')
        </main>
        
        <footer class="mt-4 text-center text-gray-500 font-bold p-5">
            {{--helpers--}}
            TecGram - Todos los derechos reservados - {{now() ->year}}
        </footer>
    </body>
</html>
