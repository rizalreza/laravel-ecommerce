@extends('admin.layout.admin')
@section('content')
    
    	<h3>List Product</h3>
<ul>
	@forelse($products as $product)
	<li>
		<h4>Product Name : {{$product->name}}</h4>
	</li>

		@empty

		<h4>No product available</h4>
	@endforelse
</ul>

@endsection