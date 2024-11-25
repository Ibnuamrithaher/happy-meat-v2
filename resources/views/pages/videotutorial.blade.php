<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/css/produk.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet"/>
    <link href="frontend/image/logo.png" rel="shortcut icon" >
    <script src="js/main.js" crossorigin="anonymous"></script>
    <title>Video Tutorial Happy Meat</title>
  </head>
  <body class="body">
    <div class="header">
      @include('../includes/navbar2')
    </div>

    <section class="section-hero">
      <div class="container-hero">
        <div class="flexbox-hero">
          <div class="right-block-hero">
            {{-- <img class="image-hero" src="frontend/image/image.png" /> --}}
            <iframe width="500" height="280" src="https://www.youtube.com/embed/LwqOMQWqDtk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
         </div>
          <div class="left-block-hero">
            <h2 class="hero-heading">Video Tutorial Happy Meat</h2>
            <p class="hero-paragraf">
              Berbagai video informatif mengenai daging sapi sudah tersedia di Happy Meat, dari mulai
              video tutorial membuat olahan masakan dari daging sapi, tips menarik menyimpan daging sapi, 
              dan masih banyak video informatif lainnya!
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-product">
      <div class="container-product">
        <h1 class="heading-section-product">Video terbaru</h1>
        <!-- <p class="section-product-description">
          Project Discussions, important documents and get to know the news
          project earlier. Its easy to use and has a good Interface and
          comfortable with all good services.
        </p> -->
        

        <div class="filter-container">
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
        </div>
        <!--<div class="button-loading">-->
        <!--  <a href="#" class="button-loading-product">Load More</a>-->
        <!--</div>-->
      </div>
    </section>

    @include('../includes/footer')

  </body>
</html>
