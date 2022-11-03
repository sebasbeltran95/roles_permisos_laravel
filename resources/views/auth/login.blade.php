@extends('layout.plantilla')

@section('title', 'Login')

@section('content')
    <form class="box" action="{{route('login.store')}}" method="post">
        @csrf
        <h1>Login</h1>
        <input type="text" id="email" name="email" placeholder="Correo Electronico">
        <input type="password"id="password" name="password" placeholder="Contraseña">
        @error('message')
        <p class="error">
            *{{ $message }}
        </p>
        @enderror

        {{--  <input type="submit" name="" value="Login">  --}}
        <button type="submit" class="boton">Login</button>

    </form>
@endsection