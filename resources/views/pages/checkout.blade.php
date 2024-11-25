@extends('layouts.checkout')

@section('title', 'Checkout Product')

@section('content')
<div class="main">

    <div class="container" style="width: 80%; padding-top: 5%">
        <h1 style="color: black">Checkout</h1>
        <div style="background-color: #FC5043; color:white; padding: 5px">
            Your Information
        </div>
        <table>
            <tr>
                <td><b>Name</b></td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td><b>Address</b></td>
                <td>{{ Auth::user()->address }}</td>
            </tr>
        </table>
        <div style="background-color: #FC5043; color:white; padding: 5px">
            Your Product
        </div>
        <?php $no = 1;
        $transaction_total = $item->meat_package->price + 20000;?>
        <table>
            <tr>
                <td><b>No</b></td>
                <td><b>Product</b> </td>
                <td><b>Quantity</b> </td>
                <td><b>Harga</b> </td>
            </tr>
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{$item->meat_package->title}}</td>
                <td>1</td>
                <td>Rp {{ $item->meat_package->price }}</td>
            </tr>
        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td style="width: 7%">Subtotal</td>
                    <td>Rp {{ $item->meat_package->price }}</td>
                </tr>
                <tr>
                    <td>Ongkir</td>
                    <td>@currency(20000)</td>
                </tr>
                <tr>
                    <td><h4>Total</h4></td>
                    <td>Rp {{ $item->meat_package->price + 20000 }}</td>
                </tr>
            </table>
        </div>
        <hr>
        <button id="pay-button" data-item-id="{{ $item->id }}"  class="btn btn-block btn-join-now mt-3 py-2" style="background-color:#FC5043; color: white">Process Payment</button>
        {{-- <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2" style="background-color:#FC5043; color: white">Process Payment</a> --}}

    </div>
</div>
@endsection

@push('prepend-style')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style1.css') }}">
@endpush

@push('addon-script')
    <script type="text/javascript">
          // For example trigger on button clicked, or any time you need
          var payButton = document.getElementById('pay-button');
          payButton.addEventListener('click', function () {
            var itemId = payButton.getAttribute('data-item-id');
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
              onSuccess: function(result){
                /* You may add your own implementation here */
                alert("payment success!"); console.log(result);
                window.location.href = `/checkout/confirm/${itemId}/${result}`;
              },
              onPending: function(result){
                /* You may add your own implementation here */
                alert("wating your payment!"); console.log(result);
                const resultJson = encodeURIComponent(JSON.stringify(result));
                console.log(resultJson)
                window.location.href = `/checkout/confirm/${itemId}?result=${resultJson}`;
              },
              onError: function(result){
                /* You may add your own implementation here */
                alert("payment failed!"); console.log(result);
              },
              onClose: function(){
                /* You may add your own implementation here */
                alert('Kamu, menutup pop up tanpa melakukan pembayaran, apakah yakin akan keluar ?');
              }
            })
          });
    </script>
@endpush

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endpush
