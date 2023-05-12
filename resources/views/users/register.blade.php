@extends('layouts.app')

@section('title','Registro')

@section('content')
    
    <form class="max-w-md mx-auto mt-9" method="POST" action="" >
        @csrf
    
        <div class="mb-4">
        <label for="name" class="block mb-2 font-bold">Nombre:</label>
        <input type="text" name="name" class="w-full px-3 py-2 border rounded-md"  required >
        
        </div>
    
        <div class="mb-4">
        <label for="last_name" class="block mb-2 font-bold">Apellido Paterno:</label>
        <input type="text"  name="last_name" class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div class="mb-4">
        <label for="second_name" class="block mb-2 font-bold">Apellido Materno:</label>
        <input type="text" name="second_name"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div class="mb-4">
        <label for="email" class="block mb-2 font-bold">Correo Electrónico:</label>
        <input type="email" name="email"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div class="mb-4">
        <label for="password" class="block mb-2 font-bold">Contraseña:</label>
        <input type="password" name="password"  class="w-full px-3 py-2 border rounded-md" required>
        </div>
    
        <div>
        <button type="submit" class="w-full px-4 py-2 text-white bg-purple-600 hover:bg-purple-700 rounded-md">Registrarse</button>
        </div>
    </form>
    
@endsection