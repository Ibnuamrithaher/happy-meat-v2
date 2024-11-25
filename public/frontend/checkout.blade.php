<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
    <div class="container" style="width: 80%;">
        <h1 style="color: black">Checkout</h1>
        <div style="background-color: orangered; color:white; padding: 5px">
            Your Information
        </div>
        <table>
            <tr>
                <td><b>Name</b></td>
                <td>Lala</td>
            </tr>
            <tr>
                <td><b>Address</b></td>
                <td>Bandung</td>
            </tr>
        </table>
        <div style="background-color: orangered; color:white; padding: 5px">
            Your Product
        </div>
        <table>
            <tr>
                <td><b>No</b></td>
                <td><b>Product</b> </td>
                <td><b>Quantity</b> </td>
                <td><b>Subtotal</b> </td>
            </tr>
            <tr>
                <td>1.</td>
                <td>Wagyu Meat</td>
                <td>1</td>
                <td>Rp 200.000</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Wagyu Meat</td>
                <td>1</td>
                <td>Rp 200.000</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Wagyu Meat</td>
                <td>1</td>
                <td>Rp 200.000</td>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td style="width: 70%">Subtotal</td>
                    <td>Rp 200.000</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rp 200.000</td>
                </tr>
                <tr>
                    <td><h4>Total</h4></td>
                    <td>Rp 400.000</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="dropdown">
            <button style="background-color: orangered; color: white; width: 35%; float: right" class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              Metode Pembayaran
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">ATM</a></li>
              <li><a class="dropdown-item" href="#">Gopay</a></li>
            </ul>
          </div>
    </div>
    </div>
</body>
</html>