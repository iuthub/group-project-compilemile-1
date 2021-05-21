<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Sneakers</title>

    <link rel="icon" href="img/trainers.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
<!-- start header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/trainers.png" alt="" width="30"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>
                <span class="navbar-text text-light m-2">
                    Hello dear {{ Auth::user()->name }}
                </span>
                <form action="{{ route('logout') }}" method="post">
                     @csrf
                    <button type="submit" class="btn btn-outline-light">
                        <i class="fas fa-sign-in-alt"></i>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <!-- start home -->
    <section class="banner-area" id="home" >
        @include('layouts.home')
    </section>
    <!-- End home -->

    <!-- Start news -->
    <section class="top-course-area section-gap" id="news">
        @include('layouts.news')
    </section>
    <!-- End news -->

    <!-- Start service -->
    <section class="service-area section-gap" id="service">
        @include('layouts.service')
    </section>
    <!-- End service -->

    <!-- Start products-->
    <section class="unique-feature-area section-gap" class="products" id="products">
        @include('layouts.products')
    </section>
    <!-- End products-->

    <!-- Start review -->
    <section class="review-area section-gap" id="review">
        @include('layouts.review')
    </section>
    <!-- End review -->


    <!-- Start footer -->
    <footer class="bg-light text-center text-lg-start" id="contact">
        @include('layouts.contact')
    </footer>
    <!-- End footer -->

    <script src="./resources/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        var header = document.getElementById("navbarText");
        var links = header.getElementsByClassName("nav-link");
        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</body>

</html>
