<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
    <div class="header">
        @include('navbar')
    </div>
    <div class="main">
    <div class="section">
        <div class="container">
            <div class="title">
                <h1>About <h1 style="color: orangered;">Happy Meat</h1> </h1>
            </div>
            <div class="row mb-5">
                <img src="img/meat.png" alt="happy meat">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="row mt-5" style="margin-top: 30px;">
                {{-- <div class="image-section">
                    <img src="img/meat2.png" alt="Happy Meat">
                </div>
                <div class="content">
                    <div class="article">
                            <h1 style="color: orangered; margin-top: 20px; margin-left: 20px;">History</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                    </div>
                </div> --}}
                <div class="col image-responsive">
                    <img src="img/meat2.png" alt="Happy Meat" style="float:">
                </div>
                <div class="col">
                    <h1 style="color: orangered;">History</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </p>
                </div>
            </div>
          
        </div>
    </div>
    <div class="team-section">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h1>Our Team</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="img/131.jpg" alt="Syakira">
                    <h4>Syakira Rahma Fauziyah</h4>
                    <p>Project Manager</p>
                </div>
                <div class="col">
                    <img src="img/511.jpg" alt="Salma">
                    <h4>Salma Tri Audryani</h4>
                    <p>Designer</p>
                </div>
                <div class="col">
                    <img src="img/571.jpg" alt="Fachri">
                    <h4>Muhammad Fachri Maulana</h4>
                    <p>Front-End Developer</p>
                </div>
                <div class="col">
                    <img src="img/711.jpg" alt="Ananda">
                    <h4>Ananda Miftakhul Syifa</h4>
                    <p>Back-End Developer</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>