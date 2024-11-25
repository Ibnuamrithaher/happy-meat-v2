<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />
</head>

<body>
    <div class="header">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="header-logo"><a href="/"><img src="{{ url('frontend/image/logo.png') }}" alt=""></a>
        </div>
        <div class="header-list list-left">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/product">Produk</a></li>
                <li><a href="/article">Artikel</a></li>
                <li><a href="/video">Video</a></li>
                <li><a href="/aboutus">Tentang</a></li>
            </ul>
        </div>

        @guest
            <div class="header-list list-right">
                <ul>
                    <!-- <li><a href="/mycart"><i class="fa fa-shopping-cart"></i></a></li> -->
                    <li><a href="/user-login">Masuk</a></li>
                    <li><a href="/user-register">Daftar</a></li>
                    <!-- <li><i class="fa fa-shopping-cart"></i></li> -->
                </ul>
            </div>
        @endguest

        @auth
            <div class="header-list list-right">
                <ul>
                    @if (auth()->user()->roles == 'ADMIN')
                        <li><a href="{{ route('dashboard') }}">Admin Panel</a></li>
                    @elseif (auth()->user()->roles == 'VENDOR')
                        <li><a href="{{ route('dashboard.suplayer') }}">Dashboard</a></li>
                    @endif
                    <li><a href="/my-account">{{ Auth::user()->username }}</a></li>
                    <li style="float:right; margin-top:-25px" class="li-btn">
                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger logout-btn" type="submit" value="Logout"><b>Logout</b></button>
                        </form>
                    </li>
                    <!-- <li><i class="fa fa-shopping-cart"></i></li> -->
                    {{-- <li><a href="/mycart"><i class="fa fa-shopping-cart"></i></a></li> --}}
                </ul>
            </div>

            {{-- <div class="header-list list-right">
            <form action="{{ url('logout') }}" method="POST">
              @csrf
              <button type="submit">Keluar</button>
            </form>
        </div> --}}
        @endauth
    </div>
</body>

</html>
