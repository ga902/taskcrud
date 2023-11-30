<!-- resources/views/auth/login.blade.php -->

@extends('layout.header')


    <div class="container mt-5">
        <form method="POST" action="{{ route('login') }}" class="col-md-6 offset-md-3">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus>
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                @error('password')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

