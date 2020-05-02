<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Shoppers - My Page</title>

        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" >
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Favicons -->
        <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
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

        .carousel-inner img {
      width: 100%;
      height: 500;
  }
        </style>

        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.4/examples/product/product.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">User Page</h4>
                                @auth
                                    <p class="text-muted">Welcome {{ Auth::User()->name }}.  This page will helps you to find your favorite books. Start exploring and get its all here in Shoppers.</p>
                                @endauth
                                @guest
                                    <p class="text-muted">Welcome in Shoppers. This page will helps you to find your favorite books. Start exploring and get its all here in Shoppers.</p>
                                @endguest
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4 text-right">
                            <h4 class="text-white">My Admin Dashboard</h4>
                            <ul class="nav flex-column justify-content-end">
                                @auth 
                                    <li><a class="text-decoration-none" href="{{ route('profileuser') }}" class="text-white">My Profile</a></li>
                                    <li><a class="text-decoration-none" href="{{ route('logoutuser') }}" class="text-white">Logout</a></li>
                                @endauth
                                @guest
                                    <li><a class="text-decoration-none" href="{{ route('loginuser') }}" class="text-white">Login</a></li>
                                    <li><a class="text-decoration-none" href="{{ route('registeruser') }}" class="text-white">Sign Up</a></li>
                                @endguest
                                <li><a class="text-decoration-none" href="#" class="text-white">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                        <strong>Shoppers</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        @auth
                            <a class="text-decoration-none mr-5 text-light" href="#">{{Auth::User()->name}}</a>
                        @endauth
                        @guest
                            <a class="text-decoration-none mr-5 text-light" href="#">Welcome</a>
                        @endguest
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>   
        <nav class="site-header sticky-top py-1 bg-dark">
            <div class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
            </div>
        </nav>

        
        <div id="demo" class="carousel slide pt-3" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.stack.imgur.com/hXVQV.jpg" alt="Los Angeles" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="https://ourcodeworld.com/public-media/articles/articleocw-59cb7f7a3a081.png" alt="Chicago" width="1100" height="500">
                </div>
                <div class="carousel-item">
                    <img src="https://www.webdesignerdepot.com/cdn-origin/uploads/2018/02/06-web-routes-laravel-code-tutorial.jpg" alt="New York" width="1100" height="500">
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-5 text-left bg-light">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card">
                    <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                    <img src="https://embed-fastly.wistia.com/deliveries/240bc2061b58c92f5f1a5786b1d445cf47f02737.webp?image_crop_resized=1280x720" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark" >
            <div class="container">
                <p class="text-light mt-3">&copy; Kelompok 7 Praktikum Pemrograman Internet 2020</p>
                <button type="button" class="btn btn-secondary">
                    <a href="#" class="text-light text-decoration-none">Back to top</a>
                </button>
            </div>
        </nav>
    </body>
</html>
