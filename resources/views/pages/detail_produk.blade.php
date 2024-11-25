<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Detail Produk</title>
</head>
<body>
    <div class="header">
        @include('../includes/navbar')
    </div>

    <!-- Content -->
    <div class="main">
        <div class="col-md-12 product-part">
            <div class="container detail-product">
                @if($item->galleries->count())

                @endif
                <div class="container col-lg-5 col-md-5 col-sm-12 col-12 foto-product">
                    <img src="{{ asset("/storage/".$item->patch) }}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 desc-product">
                    <h2>{{ $item->title }}</h2>
                    <h4><a href="">{{ $item->type }}</a></h4>
                    <h5>Rp.{{ $item->price }}/kg</h5>
                    <p>{{!! $item->about !!}}</p>
                    @auth
                    <form action="{{route('checkout_process',$item->id)}}" method="post">

                    @csrf
                        <button type="submit">
                            Checkout
                        </button>
                    </form>
                    @endauth
                    @guest
                    <a href="/user-login"><i class="fa fa-shopping-cart"></i>Login or Register to Checkout</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</body>
</html>
