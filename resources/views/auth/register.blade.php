@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
      <div class="md:w-6/12 p-5">
        <img src="{{asset('img/registrar.jpg')}}" alt="Imagen de registro de usuarios">
      </div>

      <div class="md:w-1/2 bg-white p-6 rounded-lg shadow-xl">
        <form action="{{ route('register') }}" method="POST">
          @csrf
          <div class="mb-5">
            <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
              Nombre
            </label>
            <input id="name" name="name" type="text" placeholder="Ingresa tu nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}"">
            @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
            @enderror
          </div>
          <div class="mb-5">
            <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" >
              Username
            </label>
            <input id="username" name="username" type="text" placeholder="Ingresa tu nombre de usuario" class="border p-3 w-full rounded-lg">
          </div>
          <div class="mb-5">
            <label for="email" class="mb-2 block uppercase text-gray-500 font-bold" >
              Email
            </label>
            <input id="email" name="email" type="email" placeholder="Ingresa tu email de registro" class="border p-3 w-full rounded-lg">
          </div>
          <div class="mb-5">
            <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" >
              Password
            </label>
            <input id="password" name="password" type="password" placeholder="Ingresa tu password" class="border p-3 w-full rounded-lg">
          </div>
          <div class="mb-5">
            <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold" >
              Repetir Password
            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu password" class="border p-3 w-full rounded-lg">
          </div>

          <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        </form>
      </div>
    </div>
@endsection