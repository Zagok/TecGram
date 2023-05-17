<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TecGram</title>
        @vite('resources/css/app.css')
    </head>
        <header class="bg-white p-5 shadow">
            <div class="container flex mx-auto justify-between items-center">
        
                <a href="{{route('index')}}" class="text-3xl font-black">TecGram</a>
                <nav class="flex items-center gap-20">
                    <span class="font-bold text-gray-600 text-sm">

                        <form action="{{route('logout.store')}}" method="post">
                            @csrf
                            <button class="font-bold uppercase text-gray-600 text-sm ml-7" type="submit" >Cerrar Sesion</button>
                        </form>
                    </span>
                </nav>
            </div>
        </header>
</html>
