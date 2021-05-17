<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Watch</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
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

                        <li>
                            <a href="#contact">Contact</a>
                        </li>

                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="generic.html">Generic</a></li>
                                <li><a href="elements.html">Elements</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </div>
    </header>
    <!-- #header -->

    <!-- start home -->
    <section class="banner-area" id="home">
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
    <script src="./resources/js/bootstrap.js"></script>

</body>

</html>
