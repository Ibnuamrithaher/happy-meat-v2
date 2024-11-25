<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>My Account</title>
</head>
<body>
    <div class="header">
        @include('navbar')
    </div>

    <!-- Content -->
    <div class="main">
        <div class="container">
            <h2 class="profil-saya">Profil Saya</h2>
            <div class="col-md-5 profile">
                <div class="profile-name">
                    <div class="profile-photo"><img src="img/image.png" alt=""></div>
                    <h3 class="user-name">Star Butterfly</h3>
                </div>
                <div class="profile-title">
                    <p><a href="" class="active">My Account</a></p>
                    <p><a href="/my-order" class="title">My Order</a></p>
                    <p><a href="" class="title">Log Out</a></p>
                </div>
            </div>
            <div class="col-md-6 my-account">
                <div class="account-part">
                    <form action="">
                        <div class="box-account">
                            <h6>Username</h6>
                            <input type="text" class="form-control" placeholder="Username" value="star123">
                        </div>
                        <div class="box-account">
                            <h6>Nama</h6>
                            <input type="text" class="form-control" placeholder="Nama" value="Star Butterfly">
                        </div>
                        <div class="box-account">
                            <h6>Email</h6>
                            <input type="email" class="form-control" placeholder="Email" value="star@gmail.com">
                        </div>
                        <div class="box-account">
                            <h6>Nomor Telepon</h6>
                            <input type="text" class="form-control" placeholder="Nomor Telepon" value="">
                        </div>
                        <div class="box-account">
                            <h6>Alamat</h6>
                            <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Alamat">Jl. Mewni Utara no. 30 Oklahoma Amerika Serikat</textarea>
                            <!-- <input type="password" class="form-control" placeholder="Password"> -->
                        </div>
                        <div class="box-account">
                            <h6>Password</h6>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                    </form>
                </div>
                <button class="w-100 btn btn-lg mt-3 acc-btn" type="submit">Simpan</button>
            </div>
        </div>
    </div>
</body>
</html>