<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="frontend/image/logo.png" rel="shortcut icon" >
    <title>My Order</title>
</head>
<body>
    <div class="header">
        @include('../includes/navbar')
    </div>

    <!-- Content -->
    <div class="main">
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2 class="profil-saya">Pesanan</h2>
            <div class="col-md-5 profile">
                <div class="profile-name">
                    <div class="profile-photo"><img src="img/meatt.png" alt=""></div>
                    <h3 class="user-name">Halo {{ Auth::user()->username }}!</h3>
                </div>
                <div class="profile-title">
                    <p><a href="/my-account" class="title">Akun Saya</a></p>
                    <p><a href="" class="active">Pesanan</a></p>
                    {{-- <p><a href="" class="title">Log Out</a></p> --}}
                </div>
            </div>
            <div class="col-md-7 order">
                <h4>Pesanan</h4>
                <div class="table-responsive">
                    <table class="table table-striped mx-auto w-auto">
                        <?php $no = 1 ?>
                        <tr>
                            <th>No</th>
                            {{-- <th>ID Order</th> --}}
                            <th>Tanggal</th>
                            <th>Produk</th>
                            <th>Status</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                {{-- <td>{{ $item->id }}</td> --}}
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->meat_package->title }}</td>
                                <td>
                                    @if ($item->transaction_status == 'SETTLEMENT')
                                        Dibayar
                                    @else
                                        {{ $item->transaction_status }}
                                    @endif
                                </td>
                                <td>{{ $item->transaction_total }}</td>
                                @if ($item->transaction_status == 'PENDING')
                                    <td>
                                        <a href="{{ route('cekstatuspembayran',$item->id) }}" class="btn btn-primary btn-sm">Cek Status Pembayaran</a>
                                    </td>
                                @else
                                    <td>
                                        -
                                    </td>
                                @endif
                                <!--<td><a href="{{ route('detail-order', $item->id) }}" type="button" class="detail-btn">Detail</a></td>-->
                            </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
