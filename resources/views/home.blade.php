@extends('app')
@section('content')
@auth
    <p>Selamat datang, <b>{{ Auth::user()->nama }}</b></p>
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
@endauth
@guest
<h5>Mohon Login atau Register untuk Melanjutkan</h5>
    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
@endguest

@endsection