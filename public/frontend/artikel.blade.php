<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/artikel.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body class="body">
    {{-- <div class="header">
      <div class="header-container">
        <div class="header-logo">
          <a href="/"><img src="img/logo.png" alt="" /></a>
        </div>
        <div class="header-list list-left">
          <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/product">Produk</a></li>
            <li><a href="/article">Artikel</a></li>
            <li><a href="/aboutus">About</a></li>
          </ul>
        </div>
        <div class="header-list list-right">
          <ul>
            <li><a href="/user-register">Register</a></li>
            <!-- <li><i class="fa fa-shopping-cart"></i></li> -->
            <li><a href="/user-login">Log In</a></li>
            <li>
              <a href="mycart"><i class="fa fa-shopping-cart"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div> --}}
    @include('navbarr')
    <section class="section-hero">
      <div class="container-hero">
        <div class="flexbox-hero">
          <div class="right-block-hero">
            <img class="image-hero" src="img/Image.png" />
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
          <a href="/detail-artikel" class="article-card w-inline-block">
            <div class="card-thumbnail-produk-1"></div>
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
          </a>
        </div>
        <div class="button-loading">
          <a href="#" class="button-loading-article">Load More</a>
        </div>
      </div>
    </section>
    
    @include('footer')
    {{-- <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <img height="" class="logo-footer" />
            <div class="text-block-2">
              Shop that serves you so many quality meat
            </div>
          </div>
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">contact us</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">Produk</a></li>
              <li><a href="#">Artikel</a></li>
              <li><a href="#">Home</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer> --}}
  </body>
</html>
