@extends('layouts.backend_app')

@section('title', 'Admin Register')

@section('app_content')
    <div class="login-page">
        <div class="login-box">
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <h3 class="login-box-msg">Admin Register</h3>

                    <form action="{{ route('admin.store') }}" method="post">

                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="dob">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        @error('dob')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your City" name="city">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Enter Your Country" name="country">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        @error('country')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder=" Enter Your Password"
                                name="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                </div>
                </form>

                <p class="mb-0 p-2 text-center">
                    <a href="{{ route('admin.login') }}" class="text-center">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    </div>

@stop
