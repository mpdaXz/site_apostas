@extends('master')
@section('content')
    <a href="{{route('home.index')}}">Home</a>
    @error('error')
        <span>{{$message}}</span>
    @enderror
    <h2>Login</h2>
    <form action="{{route('login.store')}}" method="post">
        @csrf
        <input type="text" name="email" value="usuariotest@gmail.com">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        <input type="password" name="password" value="12345">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        <button type="submit">Login</button>
    </form>
@endsection
