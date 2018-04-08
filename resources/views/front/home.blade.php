@extends('layout.main')

@section('content')

    <section class="hero text-center">

    </section>
    <br/>
    <div class="subheader text-center">
        <h2>
            Latest Products
        </h2>
    </div>

     <!-- products listing -->
         <!-- Latest SHirts -->
    <div class="container ">
        <div class="row full-width">
            @forelse($products->reverse()->slice(0, 4) as $product)
            <div class="col-sm-3">
                <div class="item-wrapper ">
                    <div class="img-wrapper">
                        <a href="{{route('cart.edit',$product->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a >
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