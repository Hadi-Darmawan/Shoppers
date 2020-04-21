<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Shoppers - My Profile</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/cover/">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            html, body {
                font-family: 'Nunito', sans-serif;
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
    <link href="https://getbootstrap.com/docs/4.4/examples/cover/cover.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">My Profile</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="# ">Profile</a>
                    <a class="nav-link" href="#">Edit Profile</a>
                    <a class="nav-link" href="{{ route('userhome') }}">Home</a>
                </nav>
            </div>
            </header>
            <main role="main" class="inner cover text-left">
                <div class="card text-white bg-dark mb-3" style="max-width: 600px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . Auth::User()->profile_image) }}" alt="..." class="rounded border border-secondary img-fluid" style="width: 100%; height: 100%;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Name : {{Auth::User()->name}}</h5>
                                <h5 class="card-title">E-Mail : {{Auth::User()->email}}</h5>
                                <h5 class="card-title">Status : {{Auth::User()->status}}</h5>
                            </div>
                            <div class="card-body">
                                <a class="text-secondary text-decoration-none" href="{{ route('logoutuser') }}" class="text-white">logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p class="text-light mt-3">&copy; Kelompok 7 Praktikum Pemrograman Internet 2020</p>
                </div>
            </footer>
        </div>
    </body>
</html>
