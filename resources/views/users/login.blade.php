@extends('layouts.app')

@section('title','Login')

@section('content')
  
    
    <form class="max-w-md mx-auto mt-9" method="POST" action=""  >
        <h1 class="font-bold" >Login</h1>
        @csrf
    
        <div class="mb-4">
        <label for="email" class="block mb-2 font-bold">Correo Electrónico:</label>
        <input type="email" name="email"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div class="mb-4">
        <label for="password" class="block mb-2 font-bold">Contraseña:</label>
        <input type="password" name="password"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div>
        <button type="submit" class="w-full px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Enviar</button>
        </div>
    </form>
    
@endsection
