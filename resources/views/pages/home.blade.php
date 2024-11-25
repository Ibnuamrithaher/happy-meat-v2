{{-- @extends('layouts.app')

@section('title')
Happy Meat
@endsection

@section('content') --}}
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/css/homepage.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet"/>
    <link href="frontend/image/logo.png" rel="shortcut icon" >
    <script src="js/main.js" crossorigin="anonymous"></script>
    <title>Happy Meat</title>
  </head>
  <body class="body">
    <!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
    <div id="snap-container"></div>
    <div class="header">
      @include('../includes/navbar2')
    </div>

   <section class="section-hero-lp">
      <div class="container-hero-lp">
        <div class="flexbox-hero-lp">
          <div class="left-block-hero-lp">
            <h2 class="hero-heading-lp">Apa itu Happy Meat?</h2>



            <p class="hero-paragraf-lp">
              Happy Meat merupakan wirausah daging dan distributor yang
              menyediakan berbagai produk beku seperti daging sapi, daging
              daging kerbau, daging iga, dll. Dengan semangat yang tinggi kami
              terus berkomitmen untuk memberikan produk yang berkualitas dengan
              harga yang terjangkau.
            </p>
          </div>
          <div class="right-block-hero-lp">
            <img class="image-hero-lp" src="frontend/image/image.png" />
          </div>
        </div>
      </div>
    </section>


    <section class="section-what">
      <div class="container-section-what">
        <div class="flexbox-section-what">
          <div class="section-what-img-box">
            <img
              src="{{ url('frontend/image/daging.png') }}"
              class="section-what-img"
              alt="Daging merah"
            />
          </div>
          <div class="conten-wrapper-section-what">
            <h1 class="heading-primary">Kami menyediakan daging terbaik</h1>
            <p class="section-what-description">
              Perusahaan kami menyediakan berbagai macam produk beku berkualitas
              untuk kepuasan dan kenyamanan pelanggan
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-why">
      <div class="container-why">
        <h1 class="heading-section-why">Mengapa Happy Meat</h1>
        <p class="section-why-description">
          Kami menyediakan segala kebutuhan produk dan jasa terkait dengan
          daging sapi dan olahannya.
        </p>
        <div class="section-why-images-description">
          <div class="col">
            <img src="{{ url('frontend/image/Daging-ilustration.png') }}" alt="daging-ilustrasi" />
            <p>Berasal dari daging pilihan</p>
          </div>
          <div class="col">
            <img
              src="{{ url('frontend/image/Perusahaan-Ilustration.png') }}"
              alt="perusahaan-ilustrasi"
            />
            <p>Diambil dari suppllier terpercaya</p>
          </div>
          <div class="col">
            <img src="{{ url('frontend/image/Harga-Ilustration.png') }}" alt="harga-ilustrasi" />
            <p>Harga terjangkau dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-product">
      <div class="container-product">
        <h1 class="heading-section-product">Produk terbaru</h1>
        <p class="section-product-description">
          Dapatkan penawaran harga terbaik dengan kualitas prima mulai dari
          pembelian daging sapi segar, impor beku hingga aneka frozen food.
          Hubungi kami segera untuk mendapatkan penawaran terbaik.
        </p>
        <div class="product-grid">
          @foreach ($latest_product as $items => $item)
          <?php $deskripsi = substr($item->desc, 0, 30) ?>
              <div href="" class="product-card rib">
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
                      <a href="{{ route('detail_produk', $item->slug) }}" class="buy"
                        >Beli</a
                      >
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
        <div class="button-lihat-semua">
          <a href="/product" class="button-lihat-produk">Lihat Semua</a>
        </div>
      </div>
    </section>

    <section class="section-article">
      <div class="container-article">
        <h1 class="heading-section-article">Artikel Terbaru</h1>
        <p class="section-article-description">
          Kami menyediakan berbagai artikel untuk pengguna agar mendapatkan
          berita terkini seputar daging sapi
        </p>
        <div class="article-grid">
        @foreach ($latest_article as $artikel)
        <?php $deskripsi = substr($artikel->desc, 0, 30) ?>
          <a href="{{ route('detail_artikel', $artikel->slug) }}" class="article-card w-inline-block">
            <div class="card-thumbnail-article-1" style="background-image: url('{{ $artikel->artikel_galleries->count() ? Storage::url
              ($artikel->artikel_galleries->first()->image) : '' }}')"></div>
            <div class="card-content-article">
              <div>
                <h2 class="heading-card-article">
                  {{ $artikel->title }}
                </h2>
                <p class="caption-card">
                  {{$deskripsi}} ...
                </p>
              </div>
              <div class="author-date-card">
                <div class="avatar-1"></div>
                <div class="author-name">{{ $artikel->writer }}</div>
                <div class="publish-date">{{ $artikel->publish }}</div>
              </div>
            </div>
          </a>
          @endforeach
        </div>
        <div class="button-lihat-semua">
          <a href="/article" class="button-lihat-article">Lihat Semua</a>
        </div>
      </div>
    </section>

    <section class="section-product">
      <div class="container-product">
        <h1 class="heading-section-product">Video Terbaru</h1>
        <p class="section-product-description">
          Kami menyediakan berbagai video menarik untuk pengguna agar mendapatkan
          informasi seputar daging sapi
        </p>
        <div class="product-grid">
          @foreach ($latest_video as $items => $item)
          <?php $deskripsi = substr($item->desc, 0, 30) ?>
            <div href="/detail_video" class="product-card rib">
              <div class="card-thumbnail-product-1">
                <iframe width="330px" height="100%" src="{{ $item->resource }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
              </div>
              <div class="card-content-product">
                <h2 class="heading-card-product">
                  {{-- <a href="{{ route('detail_produk', $item->slug) }}">{{ $item->title }}</a> --}}
                  <a href="{{ route('detail_video', $item->slug) }}"><b>{{ $item->title }}</b></a>
                </h2>
                <p class="caption-card">
                  {{ $deskripsi }} ...
                </p>
              </div>
            </div>
            @endforeach
          </div>
          <div class="button-lihat-semua">
            <a href="/video" class="button-lihat-article">Lihat Semua</a>
          </div>
    </section>

@include('../includes/footer')
</body>
</html>
