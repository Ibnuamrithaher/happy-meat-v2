<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>My Order</title>
</head>
<body>
    <div class="header">
        @include('navbar')
    </div>

    <!-- Content -->
    <div class="main">
        <div class="container">
            <h2 class="profil-saya">Order Saya</h2>
            <div class="col-md-5 profile">
                <div class="profile-name">
                    <div class="profile-photo"><img src="img/image.png" alt=""></div>
                    <h3 class="user-name">Star Butterfly</h3>
                </div>
                <div class="profile-title">
                    <p><a href="/my-account" class="title">My Account</a></p>
                    <p><a href="" class="active">My Order</a></p>
                    <p><a href="" class="title">Log Out</a></p>
                </div>
            </div>
            <div class="col-md-7 order">
                <h4>My Orders</h4>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ASDFGHJKL123</td>
                        <td>23 - 03 - 2022</td>
                        <td>Shipping</td>
                        <td><a href="/detail-order" type="button" class="detail-btn">Detail</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ASDFGHJKL123</td>
                        <td>23 - 03 - 2022</td>
                        <td>Shipping</td>
                        <td><a href="/detail-order" type="button" class="detail-btn">Detail</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>