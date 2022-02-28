@extends('layouts.app')

@section('title-block')Login @endsection

@section('content')
<div class="parent_form container">
<form action="{{ route('user.login') }}" method="post">
    @csrf

    <div class="form-group mt-3">
        <label for="email" class="mb-2">Email</label>
        <input type="text" name="email" placeholder="Email" id="email" class="form-control">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="password" class="mb-2">Пароль</label>
        <input type="password" name="password" placeholder="Password" id="password" class="form-control">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-3">Login</button>
</form>
</div>
@endsection
