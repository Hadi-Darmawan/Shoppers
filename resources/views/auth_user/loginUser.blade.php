<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Shoopers - User Login Page</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Favicons -->
        <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">

        <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
    <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.4/examples/floating-labels/floating-labels.css" rel="stylesheet">
        </head>
    <body>
        <div class="container">
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">
                    Login |
                    <a class="text-decoration-none" href="{{ url('/') }}">
                    Shoppers
                </a>
            </h1>
            <p>Start buy and read your favorite Book. Don't have any account? Please <a href="{{ url('/registeruser') }}">Create New Account</a></p>
            </div>
            <form class="form-signin" method="POST" action="{{ route('loginuser') }}">
            @if (session('status'))
                <div class="alert alert-danger alert-dismissible text-center" id="myAlert">
                    <button type="button" class="close">&times;</button>
                    {{ session('status') }}
                </div>
                <script>
                    $(document).ready(function(){
                        $(".close").click(function(){
                            $("#myAlert").alert("close");
                        });
                    });
                </script>
            @endif
                @csrf
                <div class="form-label-group">
                    <input type="text" id="inputEmail" class="form-control @error('Email') is-invalid @enderror" name="Email" placeholder="Email address" value="{{ old('Email') }}" autofocus autocomplete="off">
                    <label for="inputEmail">Email address</label>
                    @error('Email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control @error('Password') is-invalid @enderror" name="Password" placeholder="Password">
                    <label for="inputPassword">Password</label>
                    @error('Password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

                <div class="text-center">
                <p class="mt-2">Forgot your password? Please <a href="{{ url('/registeruser') }}">Reset password</a></p>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 Kelompok 7 Praktikum Prognet</p>
            </form>
        </div>
    </body>
</html>
