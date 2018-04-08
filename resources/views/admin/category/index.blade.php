@extends('admin.layout.admin')
@section('content')
    
    <div class="navbar">
    	<a class="navbar-brand" href="#">Category</a>
    	<ul class="nav navbar-nav">
    		@if(!empty($categories))
	    		@forelse($categories as $category)
		    		<li>
		    			<a href="{{route('category.show',$category->id)}}">{{$category->name}}</a>
		    		</li>
	    		@empty
	    			<li>No data</li>
	    		@endforelse
	    	@endif
    	</ul>

    	<a class="btn btn-primary" data-toggle="modal" href="#modal-id">Add Category</a>
    	<div  class="modal fade" id="modal-id">
    		<div class="modal-dialog">


    			<form method="POST" action="{{route('category.store')}}">
	                {{csrf_field()}}

	                <div class="modal-content">
	    				<div class="modal-header">
	    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	    					<h4 class="modal-title">Add Category</h4>
	    				</div>

	    				<div class="modal-body">
				            <div class="form-group">
				                <label for="name">Category</span></label>
				                <input placeholder="Category name" name="name" spellcheck="false" class="form-control" required autofocus>
				            </div>
	    				</div>
	    				
	    				<div class="modal-footer">
	    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    					<button type="submit" class="btn btn-primary">Save</button>
	    				</div>

	    			</div> <!--End of modal content -->
		          
		        </form> 



    			
	    	</div><!--End of dialog -->
	    </div><!--End of modal -->

	</div>

	@if(!empty($products))
	<section>
		<h3>Products</h3>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>Products</th>
				</tr>
			</thead>

			<tbody>
			@forelse($products as $product)
				<tr>
					<td>{{$product->name}}</td>
				</tr>

				@empty
				<tr><td>No data</td></tr>

			@endforelse
			</tbody>
		</table>
	</section>
	@endif


@endsection