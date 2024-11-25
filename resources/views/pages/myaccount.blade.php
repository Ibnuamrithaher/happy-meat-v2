<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="frontend/image/logo.png" rel="shortcut icon" >
    <title>My Account</title>
</head>
<body>
    <div class="header">
        @include('../includes/navbar')
    </div>

    <!-- Content -->
    <div class="main">
        <div class="container">
            <h2 class="profil-saya">Profil Saya</h2>
            <div class="col-md-5 profile">
                <div class="profile-name">
                    <div class="profile-photo"><img src="img/meatt.png" alt=""></div>
                    <h3 class="user-name">Halo {{ Auth::user()->username }}!</h3>
                </div>
                <div class="profile-title">
                    <p><a href="" class="active">Akun Saya</a></p>
                    <p><a href="/my-order" class="title">Pesanan</a></p>
                    @if (auth()->user()->roles == "USER")
                        <p><a href="{{ route('ajukan.mitra') }}" class="title">Ajukan Partnership</a></p>
                    @elseif (auth()->user()->roles == "MITRA")
                        <p>Prosess Verifikasi partnership</p>
                    @endif

                    {{-- <p><a href="" class="title">Log Out</a></p> --}}
                </div>
            </div>
            <div class="col-md-6 my-account">
                <div class="account-part">
                    <form action="">
                        <div class="box-account">
                            <h6>Nama Pengguna</h6>
                            <input type="text" class="form-control" style="background-color: white" placeholder="Username" value="{{ Auth::user()->username }}" disabled>
                        </div>
                        <div class="box-account">
                            <h6>Nama</h6>
                            <input type="text" class="form-control" style="background-color: white" placeholder="Nama" value="{{ Auth::user()->name }}" disabled>
                        </div>
                        <div class="box-account">
                            <h6>Email</h6>
                            <input type="email" class="form-control" style="background-color: white" placeholder="Email" value="{{ Auth::user()->email}}" disabled>
                        </div>
                        {{-- <div class="box-account">
                            <h6>Nomor Telepon</h6>
                            <input type="text" class="form-control" placeholder="Nomor Telepon" value="">
                        </div> --}}
                        <div class="box-account">
                            <h6>Alamat</h6>
                            <input type="text" class="form-control" style="background-color: white" placeholder="Nama" value="{{ Auth::user()->address }}" disabled>
                            {{-- <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Alamat">{{ Auth::user()->address }}</textarea> --}}
                            <!-- <input type="password" class="form-control" placeholder="Password"> -->
                        </div>
                        {{-- <div class="box-account">
                            <h6>Password</h6>
                            <input type="password" class="form-control" placeholder="Password" value="{{ Auth::user()->password }}" disabled>
                        </div> --}}
                    </form>
                </div>
                {{-- <button class="w-100 btn btn-lg mt-3 acc-btn" type="submit">Simpan</button> --}}
            </div>
        </div>
    </div>
</body>
</html>
