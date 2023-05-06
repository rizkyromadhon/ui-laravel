@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="w-50 center border rounded px-3 py-3 mx-auto">
                <h1 class="text-center mb-4">Registration Form</h1>
                <main class="form-registration">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" value="" name="email" placeholder="Name"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" name="username" value="" name="username" placeholder="Username"
                                class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" value="" name="email" placeholder="Email Address"
                                class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button name="submit" type="submit" class="w-100 btn btn-primary">Register Now!</button>
                    </form>
                    <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection
