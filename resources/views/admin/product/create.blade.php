@extends('admin.layout.admin')
@section('content')
    
    	<h3>Create Product</h3>
	<div class="row">
	    <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2">
	    	<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
	              {{csrf_field()}}
	            <div class="form-group">
	                <label for="name">Name</span></label>
	                <input placeholder="Product name" name="name" spellcheck="false" class="form-control" required autofocus>
	            </div>

                <div class="form-group">
					<label for="description">Description</label>
					<textarea placeholder="Product description" name="description" style="resize: vertical;" class="form-control" rows="5" id="description" required autofocus></textarea>
				</div>

				<div class="form-group">
	                <label for="name">Price</span></label>
	                <input placeholder="Price" name="price" spellcheck="false" class="form-control" required autofocus>
	            </div>

               <div class="form-group">
	                <label for="size">Size</label>
	                <select name="size" class="form-control" required autofocus>
			            <option value="">Select Size</option>
			            <option value="Small">Small</option>
			            <option value="Medium">Medium</option>
			            <option value="Large">Large</option>
			        </select> 	   
	            </div>

	            <div class="form-group">
	                <label for="category">Category</label>
	                <select name="category_id" class="form-control" required autofocus>
			            <option value="">Select Category</option>
			            @foreach($categories as $category)
			            <option value="{{$category->id}}">{{$category->name}}</option>
			            @endforeach
			        </select> 	   
	            </div>

	            <div class="form-group">
	                <label for="image">Image</label>
	                <input type="file" name="image" spellcheck="false" class="form-control" value="" required autofocus>
	            </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
              </div>
	        </form> 
	    </div>
	</div>



	
@endsection
