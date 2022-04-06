@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input class="form-control" name="nama" />
            </div>

            <div class="mb-3">
                <label>Kelas</label>
                <input class="form-control" name="kelas" />
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input class="form-control" type="password" name="password" />
                <label>Sudah punya akun? <a href="{{ route('login') }}">Login</a></label>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('home') }}" >Back</a>
            </div>
        </form>
    </div>
</div>
@endsection