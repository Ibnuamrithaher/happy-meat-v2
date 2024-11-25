<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
        <div class="container cart-page">
            <div class="row mb-3" style="color: black">
                <div class="col">
                    <h4><u>Item</u></h4>
                </div>
                <div class="col">
                    <h4 style="float: right"><i class="fa fa-shopping-cart"></i> My Shopping Cart</h4>
                </div>
            </div>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="img/meat2.png" alt="meat">
                            <div class="info">
                                <h5>Wagyu Meat</h5>
                                <h6>New Premium Style</h6>
                                <p>Price: Rp 200.000</p>
                            </div>
                        </div>
                    </td>
                    <td><a href="#"><i class="fa fa-trash"></i></a> 
                        <input type="number" value="1"></td>
                    <td>Rp 200.000</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="img/meat2.png" alt="meat">
                            <div class="info">
                                <h5>Wagyu Meat</h5>
                                <h6>New Premium Style</h6>
                                <p>Price: Rp 200.000</p>
                            </div>
                        </div>
                    </td>
                    <td><a href="#"><i class="fa fa-trash"></i></a> 
                        <input type="number" value="1"></td>
                    <td>Rp 200.000</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="img/meat2.png" alt="meat">
                            <div class="info">
                                <h5>Wagyu Meat</h5>
                                <h6>New Premium Style</h6>
                                <p>Price: Rp 200.000</p>
                            </div>
                        </div>
                    </td>
                    <td><a href="#"><i class="fa fa-trash"></i></a> 
                        <input type="number" value="1"></td>
                    <td>Rp 200.000</td>
                </tr>
            </table>
            <div class="total-price">
                <table>
                    <tr>
                        <td style="width: 80%;">Subtotal</td>
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
            <a href="/checkout-order"><input style="padding: 5px; background-color: orangered; border-color: orangered; color: white; width: 100%; border-radius: 5px"  type="button" value="Checkout"></a>
            {{-- <button><a href="/checkout-order">Checkout</a></button> --}}
        </div>
    </div>
    
</body>
</html>