@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-14">
        <head>
            
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css">
        
        </head>
        <body class="img js-fullheight" style="background-image: url(img/bg.jpg);">
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">

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

                            {{-- <h2 class="heading-section">Kopegmar Tanjung Priok</h2> --}}
                            <img src="img/kpmputih.png" alt="">
                        </div>
                    </div>
                        <div class="row justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-4">
                                    <div class="login-wrap p-0">
                                        <h3 class="mb-4 text-center">Have an account?</h3>
                                        <form class="" action="/login" method="POST">
                                        @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="nama@example.com" required value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                                <span toggle="password-field" class="field-icon toggle-password"></span>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="form-control btn btn-primary submit px-3">Login</button>
                                            </div>

                                            <div class="form-group d-md-flex">
                                                <div class="w-50">
                                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                                        <input type="checkbox" >
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="w-50 text-md-right">
                                                    <a href="#" style="color: #fff">Forgot Password</a>
                                                </div>
                                            </div>
                                        </form>
                                            {{-- <p class="w-100 text-center">&mdash; Or Sign In With &mdashx ;</p>
                                            <div class="social d-flex text-center">
                                                <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                                                <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                                            </div> --}}
                                        <h6 class="d-block text-center">Not registered? <a href="/register"> Register Now</a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
                    <script src="js/jquery.min.js"></script>
                <script src="js/popper.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/main.js"></script>
        </body>
    </div>
</div>
@endsection