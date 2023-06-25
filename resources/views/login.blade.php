@extends('master')
@section('content')
    <a href="{{route('home.index')}}">Home</a>
    <h2>Login</h2>
    <form action="{{route('login.store')}}" method="post">
        @csrf
        <input type="text" name="email" value="usuariotest@gmail.com">
        <input type="password" name="password" value="123">
        <button type="submit">Login</button>
    </form>
@endsection
