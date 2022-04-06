@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input class="form-control" name="nama" />
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input class="form-control" type="password" name="password" />
                <label>Belum punya akun? <a href="{{ route('register') }}">Register</a></label>
            </div>
            
            <div class="mb-3">
                <button class="btn btn-primary">Login</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection