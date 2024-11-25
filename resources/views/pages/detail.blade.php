@extends('layouts.app')

@section('title', 'Detail Product')

@section('content')
<div class="col-md-12">    
            <div class="container detail-product">
                @if($item->galleries->count())
                <div class="container col-lg-5 col-md-5 col-sm-12 col-12 foto-product">
                    <img src="{{ Storage::url($item->galleries->first()->image) }}" alt="">
                </div>
                @endif
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 desc-product">
                    <h2>{{ $item->title }}</h2>
                    <h4><a href="">{{ $item->type }}</a></h4>
                    <h5>Rp.{{ $item->price }}/kg</h5>
                    <p>{{!! $item->about !!}}</p>
                    @auth
                    <form action="{{route('checkout_process',$item->id)}}" method="post">
                  
                    @csrf
                        <button class="btn btn-block btn-join-now mt-3 py-3" type="submit">
                            Checkout
                        </button>
                    </form>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i>Login or Register to Checkout</a>
                    @endguest
                </div>
            </div>
        </div>
@endsection