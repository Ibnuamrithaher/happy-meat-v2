<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="header">
        @include('navbar')
    </div>
    <!-- Content -->
    <div class="main">
        <div class="container">
            <img src="img/image.png" alt="" class="img-login">
            <div class="col-md-5 col-sm-12 login">
                <div class="login-title"><h2>LOGIN</h2></div>
                <div class="login-part">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="box-login">
                            <h6>Email</h6>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="box-login">
                            <h6>Password</h6>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <button class="w-100 btn btn-lg mt-3 login-btn" type="submit">Login</button>
                        <small class="d-block mt-2"><a href="">Lupa password?</a> </small>
                        <p>Atau</p>
                        <a href="/user-register" class="w-100 btn btn-lg mt-4 signup-btn">Daftar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>