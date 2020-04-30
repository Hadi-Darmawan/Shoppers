<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yess">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Shoopers - User Register Page</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <!-- Favicons -->
        <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">

        <style>
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
            <div class="text-center mb-4 m-auto">
                <h1 class="h3 mb-3 font-weight-normal">
                    Register |
                    <a class="text-decoration-none" href="{{ url('/') }}">
                        Shoppers
                    </a>
                </h1>
                <p>Start your online Shopping. You have any account? Please <a href="{{ url('/loginuser') }}">Login Here</a></p>
            </div>
        <form class="form-signin" method="POST" action="{{ route('registeruser') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-label-group">
                <input type="text" name="name" id="inputName" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Full name" value="{{ old('name') }}" required autofocus autocomplete="off">
                <label for="inputName">Full name</label>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        Nama tidak sesuai!
                    </div>
                @endif
            </div>

            <div class="form-label-group">
                <input type="email" name="email" id="inputEmail" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email address" value="{{ old('email') }}" required autofocus autocomplete="off">
                <label for="inputEmail">Email address</label>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        Email tidak sesuai atau sudah digunakan
                    </div>
                @endif
            </div>

            <div class="custom-file mt-2">
                <input type="file" name="profile_image" id="inputProfileImage" class="custom-file-input" required autofocus >
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="inputProfileImage">Profile Image</label>
                <!-- JQuery Untuk Menampilkan Nama File Gambar yang di Upload -->
                <script>
                $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
                </script>
            </div>

                <input type="disable" name="status" id="inputStatus" class="form-control" placeholder="Status" value="Active" hidden readonly>

            <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" placeholder="Password" required>
                <label for="inputPassword">Password</label>
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        Password harus sesuai Confirmation Password serta menimal 6 karakter
                    </div>
                @endif
            </div>
            
            <div class="form-label-group">
                <input type="password" name="password_confirmation" id="inputPassword" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" placeholder="Password Confirmation" required>
                <label for="inputPassword">Password Confirmation</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 Kelompok 7 Praktikum Prognet</p>
        </form>
    </body>
</html>