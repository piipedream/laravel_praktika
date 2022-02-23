@extends('layouts.app')

@section('title-block')Registration @endsection

@section('content')
<div class="parent_form container">
<form action="#" method="post">
    @csrf

    <div class="form-group mt-3">
        <label for="fio" class="mb-2">FIO</label>
        <input type="text" name="fio" placeholder="FIO" id="fio" class="form-control" pattern="[а-яА-ЯЁё- ]*">
        @error('fio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="name" class="mb-2">Login</label>
        <input type="text" name="name" placeholder="Login" id="name" class="form-control" pattern="[a-zA-Z]*">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="email" class="mb-2">Email</label>
        <input type="text" name="email" placeholder="Email" id="email" class="form-control">
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="password" class="mb-2">Password</label>
        <input type="password" name="password" placeholder="Password" id="password" class="form-control">
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <label for="password_confirmation" class="mb-2">Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Password confirmation" id="password_confirmation" class="form-control">
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mt-3">
        <input type="checkbox" name="personal_data" id="personal_data" class="form-check-label" checked>
        <label for="personal_data" class="form-check-label">Сonsent to the processing of personal data</label>
        @error('personal_data')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary mt-3">Регистрация</button>
</form>
</div>
@endsection
