@extends('layouts.admin')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <main class="form-signin m-auto">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="link mb-0 py-3 rounded-top border-top border-start border-end text-center">
                        <h1><i class="bi bi-person-square text-light"></i></h1>
                        <h1 class="h3 mb-0 text-light fw-normal text-center fw-bold">{{ $title }}</h1>
                    </div>
                    <div class="link mt-0 py-3 px-5 rounded-bottom border">
                        <form action="/login" method="POST" class="mt-3">
                            @csrf
                            <div class="form-floating mb-1">
                                <input type="email" name="email"
                                    class="form-control rounded border border-info @error('email') is-invalid @enderror"
                                    id="email" required value="{{ old('email') }}" placeholder="Email">
                                <label for="email">Email</label>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control border border-info rounded mb-1"
                                    id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary border border-info m-0"
                                type="submit">Login</button>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
