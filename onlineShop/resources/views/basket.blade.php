<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
    <title>Sneakers @yield('title')</title>

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
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('basket') }}">My Orders</a>
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

<div class="starter-template">
    <h1>Basket</h1>
    <p>{{ Auth::user()->name }}'s orders</p>
    <div class="panel">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="http://laravel-diplom-1.rdavydov.ru/mobiles/iphone_x_64">
                            {{ $product->name }}
                        </a>
                    </td>
                    <td><span class="">{{ $product->pivot->count }}</span>
                        <div class="btn-group">
                            <form action="{{ route('basket-remove', $product) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-minus" aria-hidden="true">-</span>
                                </button>
                            </form>

                            <form action="{{ route('basket-add', $product) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-plus" aria-hidden="true">+</span>
                                </button>
                            </form>
                        </div>
                    </td>
                    <td>${{ $product->price }}</td>
                    <td>${{ $product->getPriceForCount() }}</td>
                </tr>
            @endforeach

            <tr>
                <td colspan="3">For All Orders:</td>
                <td>${{ $order->getFullPrice() }}</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="{{ route('basket-place', $order->getFullPrice()) }}">Make order</a>
        </div>
    </div>
</div>
</body>
</html>
