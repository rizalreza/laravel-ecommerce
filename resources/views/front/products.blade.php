@extends('layout.main')

@section('title','Products')
@section('content')

 <!-- products listing -->
         <!-- Latest SHirts -->
    <div class="container product-content">
        <div class="row full-width">
            @forelse($products->reverse() as $product)
            <div class="col-sm-3">
                <div class="item-wrapper ">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{asset("images/$product->image")}}"/>
                        </a>
                    </div>
                    <a href="{{route('items')}}">
                        <h3>
                            {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                        IDR {{$product->price}}
                    </h5>
                    <p>
                       {{$product->description}}
                    </p>
                </div>
            </div>

            @empty
            <center><h4>No Product</h4></center>

            @endforelse
            
        </div> 
    </div>
    <br>
    <br>

@endsection