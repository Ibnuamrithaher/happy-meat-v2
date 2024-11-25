<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="{{ url('frontend/css/artikel.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet"/>
    <link href="frontend/image/logo.png" rel="shortcut icon" >
    <title>Artikel Happy Meat</title>
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
            <h2 class="hero-heading">Artikel Happy Meat</h2>
            <p class="hero-paragraf">
              Happy Meat menyediakan berbagai artikel seputar daging sapi,
              daging bagian daging sapi, daging sapi olahan, dll. Dengan
              demikian konsumen setia happy meat tidak ketinggalan artikel
              terbaru mengenai daging sapi.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-article">
      <div class="container-article">
        <h1 class="heading-section-article">Artikel terbaru</h1>
        <!-- <p class="section-article-description">
          Project Discussions, important documents and get to know the news
          project earlier. Its easy to use and has a good Interface and
          comfortable with all good services.
        </p> -->
        <div class="article-grid">
          @foreach ($latest_article as $items => $item)
          <?php $deskripsi = substr($item->desc, 0, 30) ?>
          <a href="{{ route('detail_artikel', $item->slug) }}" class="article-card w-inline-block">
            <div class="card-thumbnail-produk-1" style="background-image: url('{{ $item->artikel_galleries->count() ? Storage::url
              ($item->artikel_galleries->first()->image) : '' }}')"></div>
            <div class="card-content-article">
              <div>
                <h2 class="heading-card-article">
                  {{ $item->title }}
                </h2>
                <p class="caption-card">
                  {{$deskripsi}} ...
                </p>
              </div>
              <div class="author-date-card">
                <div class="avatar-1"></div>
                <div class="author-name">{{ $item->writer }}</div>
                <div class="publish-date">{{ $item->publish }}</div>
              </div>
            </div>
          </a>
          @endforeach
          {{-- <a href="/detail-artikel" class="article-card w-inline-block">
            <div class="card-thumbnail-produk-2"></div>
            <div class="card-content-article">
              <div>
                <h2 class="heading-card-article">
                  10 secret tips for managing report team
                </h2>
                <p class="caption-card">
                  There are 10 secret tips that you have to know for managing
                  your team remotely. Don’t let this situatuon make the team
                  feel uncomfortable
                </p>
              </div>
              <div class="author-date-card">
                <div class="avatar-1"></div>
                <div class="author-name">Danielo Adnan</div>
                <div class="publish-date">28 Juni 2020</div>
              </div>
            </div>
          </a>
          <a href="/detail-artikel" class="article-card w-inline-block">
            <div class="card-thumbnail-produk-3"></div>
            <div class="card-content-article">
              <div>
                <h2 class="heading-card-article">
                  10 secret tips for managing report team
                </h2>
                <p class="caption-card">
                  There are 10 secret tips that you have to know for managing
                  your team remotely. Don’t let this situatuon make the team
                  feel uncomfortable
                </p>
              </div>
              <div class="author-date-card">
                <div class="avatar-1"></div>
                <div class="author-name">Danielo Adnan</div>
                <div class="publish-date">28 Juni 2020</div>
              </div>
            </div>
          </a> --}}
        </div>
        <!--<div class="button-loading">-->
        <!--  <a href="#" class="button-loading-article">Load More</a>-->
        <!--</div>-->
      </div>
    </section>
    
    @include('../includes/footer')

  </body>
</html>
