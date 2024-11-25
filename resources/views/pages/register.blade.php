<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="frontend/image/logo.png" rel="shortcut icon" >
    <title>Register</title>
</head>
<body>
    <div class="header">
        @include('../includes/navbar')
    </div>

    <!-- Content -->
    <div class="main">
        <div class="container">
        <img src="{{ url('frontend/image/meatt.png') }}" alt="" class="img-login">
            <div class="col-md-5 login">
                <div class="login-title"><h2>DAFTAR</h2></div>
                <div class="login-part">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="box-login">
                            <h6>Nama</h6>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="box-login">
                            <h6>Nama Pengguna</h6>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Nama Pengguna">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="box-login">
                            <h6>Email</h6>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="box-login">
                            <h6>Nomor Telepon</h6>
                            <input type="text" class="form-control" placeholder="Nomor Telepon">
                        </div> --}}
                        <div class="box-login">
                            <h6>Alamat</h6>
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Alamat">
                        
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="box-login">
                            <h6>Kata Sandi</h6>
                            <input id="password" type="password" placeholder="Kata Sandi"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="box-login">
                            <h6>Konfirmasi Kata Sandi</h6>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required autocomplete="new-password">
                        </div>
                        <button class="w-100 btn btn-lg mt-3 login-btn" type="submit">Daftar</button>
                        <p>Atau</p>
                        <a href="/user-login" class="w-100 btn btn-lg mt-4 signup-btn">Masuk</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>