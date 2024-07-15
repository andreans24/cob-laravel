@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-14">
        <head>
            <title>Login 10</title>
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
                        <div class="col-lg-6 text-center mb-5">
                            {{-- <h2 class="heading-section">Kopegmar Tanjung Priok</h2> --}}
                            <img src="img/kpmputih.png" alt="">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 ">
                            <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Registration Form</h3>
                        <form class="" action="/register" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
                        </div>
                        
                        </form>
                        <h6 class="d-block text-center mt-3">Already Registered? <a href="/login"> Login </a></h6>

                    
                
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