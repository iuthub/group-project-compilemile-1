<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="menu-content pb-60 col-lg-10">
            <div class="title text-center">
                <h1 class="mb-10 text-white">Some of Our Recent Products</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
            <div class="col-lg-3 col-md-6">
                <div class="single-unique-product">
                    <img class="img-fluid" src="{{ $product->img }}" alt="">
                    <div class="desc">
                        <h4>
                            {{ $product->name }}
                        </h4>
                        <p>
                            {{ $product->description }}
                        </p>
                        <h6>${{ $product->price }}</h6>
                        <a class="text-uppercase primary-btn" href="../viscard.blade.php">Add to basket</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
