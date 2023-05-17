@extends('app')
@section('titulo')
    Registrate en TecGram
@endsection

@section('contenido')
<style>
    input{
        display: block;
        border-width: 2px;
        padding: 0.55rem;
        width: 100%;
        margin-bottom: 1.25rem;
        border-radius: 5px;
        margin-bottom: 30px;
    }
</style>
<div class="flex justify-center items-center gap-10">
    <div>
        <img class="rounded-full shadow-xl mr-5" src="{{asset('img/estudiante.png')}}" alt="">
    </div>
    <div class="bg-white p-6 rounded-lg shadow-xl w-4/12">
        <form action="{{route('cuenta.store')}}" method="POST"> 
            @csrf
            <div class="mb-5">
                @error('name')
                <p class="text-red-600 ">{{$message}}</p> 
                @enderror
                <input class="@error('name') border-red-500 @enderror" type="text" name="name" value="{{old('name')}}" placeholder="Escribe tu Nombre">    
                @error('email')
                <p class="text-red-600 ">{{$message}}</p> 
                @enderror        
                <input type="text" name="email" placeholder="Escribe tu Email">
                @error('password')
                <p class="text-red-600 ">{{$message}}</p> 
                @enderror
                <input type="password" name="password" placeholder="Escribe tu Contraseña">
                @error('password_confirmation')
                <p class="text-red-600 ">{{$message}}</p> 
                @enderror
                <input type="password" name="password_confirmation" placeholder="Confirma tu Contraseña">
                <input class="bg-yellow-500 hover:bg-orange-400 cursor-pointer text-white p-2 w-full rounded-lg font-bold" type="submit" value="Crear Cuenta">
            </div>
            
        </form>
    </div>
</div>
@endsection