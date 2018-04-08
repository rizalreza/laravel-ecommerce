@extends('layout.main')

@section('content')

	<div class="container">
		<center><h3>Cart items</h3></center>
				<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Size</th>
					<th>Qty</th>
					<th><center>Action</center> </th>
				</tr>
			</thead>
			<tbody>
			@foreach($cartItems as $cartItem)
				<tr>
					<td>{{$cartItem->name}}</td>
					<td>{{$cartItem->price}}</td>
					<td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>
					<td >
						{{$cartItem->qty}}
					</td>
					<td>
						<div class="nav nav-pills">
							<center>
		                        <a href="{{route('cart.edit',$cartItem->id)}}" class="fa fa-sm fa-plus-square" style="font-size:25px; text-decoration: none;"></a>
		                        <button data-toggle="modal" data-target="#updateCart" class="fa fa-sm fa-edit" style="font-size:25px; text-decoration: none;"></button>
		                     <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST" class="form-inline">
		                           {{csrf_field()}}
                                   {{method_field('DELETE')}}
		                        <button class="fa fa-sm fa-trash" data-toggle="modal" style="font-size:25px; text-decoration: none;"></button> 
		                     </form>

		                     </center>

		                </div>  
		             
	            	</td>
				</tr>
			    	
			@endforeach
			</tbody>
			
		</table>
	</div>


<!-- Modal -->
<div class="modal fade" id="updateCart" tabindex="-1" role="dialog" aria-labelledby="cartModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="cartModal">Update Cart</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection