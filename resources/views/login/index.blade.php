@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <center>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show col-md-6" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </center>

            <center>
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show col-md-6" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </center>

            <div class="w-50 center border rounded px-3 py-3 mx-auto">
                <h1 class="text-center mb-4">Please Login</h1>
                <main class="form-login">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" value="" name="email" placeholder="Email Address"
                                class="form-control @error('email') is-invalid @enderror" id="email"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" placeholder="Password" class="form-control"
                                id="password" required>
                        </div>
                        <div class="mb-3 d-grid">
                            <button name="submit" type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
                </main>
            </div>
        </div>
    </div>
@endsection
