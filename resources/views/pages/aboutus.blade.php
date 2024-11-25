<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ url('frontend/css/style1.css') }}" />
</head>
<body>
    <div class="header">
        @include('../includes/navbar')
    </div>
    <div class="main">
    <div class="section">
        <div class="container">
            <div class="title">
                <h1>Tentang <h1 style="color: #FC5043;">Happy Meat</h1> </h1>
            </div>
            <div class="row mb-5">
                <img src="{{ url('frontend/image/meat.png') }}" alt="happy meat">
                <p>
                    Happy Meat merupakan sebuah platform untuk membeli berbagai
                    jenis daging sapi yang berbasis website. Selain itu, aplikasi ini juga menyediakan
                    berbagai macam artikel informatif seputar daging sapi. Pada aplikasi ini, pengguna
                    dapat langsung membaca artikel dan melihat produk daging sapi yang tersedia.
                    Pengguna dapat melakukan transaksi pembelian daging sapi dengan mudah karena
                    setiap produk memiliki detailnya seperti harga dan deskripsinya.
                </p>
            </div>
            <div class="row mt-5" style="margin-top: 30px;">
                <div class="col image-responsive">
                    <img src="{{ url('frontend/image/meat2.png') }}" alt="Happy Meat" style="float:">
                </div>
                <div class="col">
                    <h1 style="color: #FC5043;">Sejarah</h1>
                            <p>
                                Happy Meat berdiri pada tahun 2022. Latar belakang didirikannya Happy Meat berawal dari permasalahan yang terjadi di lingkungan sekitar, 
                                yaitu haga daging sapi yang tidak stabil dan cenderung naik melonjak membuat masyarakat kekurangan informasi akan hal tersebut. Oleh karena itu, kami hadir untuk membantu Anda untuk membeli serta mengetahui harga daging sapi di pasaran. 
                                Happy Shopping Meates!
                            </p>
                </div>
            </div>
          
        </div>
    </div>
    {{-- <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h1>Our Team</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="{{ url('frontend/image/131.jpg') }}" alt="Syakira">
                    <h4>Syakira Rahma Fauziyah</h4>
                    <p>Project Manager</p>
                </div>
                <div class="col">
                    <img src="{{ url('frontend/image/511.jpg') }}" alt="Salma">
                    <h4>Salma Tri Audryani</h4>
                    <p>Designer</p>
                </div>
                <div class="col">
                    <img src="{{ url('frontend/image/571.jpg') }}" alt="Fachri">
                    <h4>Muhammad Fachri Maulana</h4>
                    <p>Front-End Developer</p>
                </div>
                <div class="col">
                    <img src="{{ url('frontend/image/711.jpg') }}" alt="Ananda">
                    <h4>Ananda Miftakhul Syifa</h4>
                    <p>Back-End Developer</p>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="section-team">
        <div class="container-team">
          <h1 class="heading-section-team">Tim Kami</h1>

          <div class="section-team-images-description">
            <div class="col">
              <img src="frontend/image/131.jpg" alt="daging-ilustrasi" />
              <h4>Syakira Rahma Fauziyah</h4>
              <p>Project Manager</p>
            </div>
            <div class="col">
              <img src="frontend/image/511.jpg" alt="perusahaan-ilustrasi" />
              <h4>Salma Tri Audryani</h4>
              <p>Designer</p>
            </div>
            <div class="col">
              <img src="frontend/image/571.jpg" alt="harga-ilustrasi" />
              <h4>Muhammad Fachri Maulana</h4>
              <p>Front-End Developer</p>
            </div>
            <div class="col">
              <img src="frontend/image/711.jpg" alt="harga-ilustrasi" />
              <h4>Ananda Miftakhul Syifa</h4>
              <p>Back-End Developer</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    @include('../includes/footer')
    
</body>
</html>