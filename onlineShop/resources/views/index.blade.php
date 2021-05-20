<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Sneakers</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>

    <header id="header">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">

                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#home">Home</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#review">Review</a></li>
                        <li><a href="#contact">Contact</a></li>

                        <li><p>Hello dear {{ Auth::user()->name }}</p></li>

                        <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input type="submit" value="log out">
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- #header -->

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
</body>

</html>
