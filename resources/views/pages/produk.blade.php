<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/css/produk.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet" />
    <link href="frontend/image/logo.png" rel="shortcut icon">
    <script src="js/main.js" crossorigin="anonymous"></script>
    <title>Produk Happy Meat</title>
</head>

<body class="body">
    <div class="header">
        @include('../includes/navbar2')
    </div>

    <section class="section-hero">
        <div class="container-hero">
            <div class="flexbox-hero">
                <div class="right-block-hero">
                    <img class="image-hero" src="frontend/image/image.png" />
                </div>
                <div class="left-block-hero">
                    <h2 class="hero-heading">Produk Happy Meat</h2>
                    <p class="hero-paragraf">
                        Happy Meat menyediakan berbagai produk beku seperti daging sapi,
                        daging bagian daging sapi, daging sapi olahan, dll. Dengan
                        dedikasi yang tinggi kami terus berkomitmen untuk memberikan
                        produk yang berkualitas dengan harga yang terjangkau
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-product">
        <div class="container-product">
            <h1 class="heading-section-product">Produk terbaru</h1>
            <!-- <p class="section-product-description">
          Project Discussions, important documents and get to know the news
          project earlier. Its easy to use and has a good Interface and
          comfortable with all good services.
        </p> -->
            <div class="filter-container">
                <div class="product-grid">
                    @foreach ($latest_product as $items => $item)
                        <?php $deskripsi = substr($item->about, 0, 30); ?>
                        <div href="/detail-product" class="product-card rib">
                            <div class="card-thumbnail-product-1" style="background-image: url('{{ asset("/storage/".$item->patch) }}')">
                                <span class="category-name">{{ $item->type }}</span>
                            </div>
                            <div class="card-content-product">
                                <h2 class="heading-card-product">
                                    <a href="{{ route('detail_produk', $item->slug) }}">{{ $item->title }}</a>
                                </h2>
                                <p class="caption-card">
                                    {{ $deskripsi }} ...
                                </p>
                                <div class="price-cart-card">
                                    <div class="price-card">Rp {{ $item->price }}</div>
                                    <div>
                                        <a href="{{ route('detail_produk', $item->slug) }}" class="buy">Beli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--<div class="button-loading">-->
            <!--  <a href="#" class="button-loading-product">Load More</a>-->
            <!--</div>-->
        </div>
    </section>

    @include('../includes/footer')

</body>

</html>
