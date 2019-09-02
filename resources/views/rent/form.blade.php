<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="box-body">
	<div class="row">
		<div class="col-md-8">
			
			<div class="form-group">
				<label>Brand</label>
				<select class="form-control select2" data-placeholder="Select a Brand" name="brand" id="brand" style="width: 100%;">
					@foreach ($brandList as $brand)
						<option> {{ $brand->brand }} </option>
					@endforeach
				</select>
			</div><!-- /.form-group -->
			
			<div class="form-group">
				<label>Product</label>
				<select class="form-control select2" data-placeholder="Select AC Type" name="product" id="product" style="width: 100%;">
					@foreach ($productList as $product)
						<option selected="selected">{{ $product->product }}</option>
					@endforeach
				</select>
			</div><!-- /.form-group -->
			
			<div class="form-group">
				<label>Variant</label>
				<select class="form-control select2" data-placeholder="Select AC Type" name="variant" id="variant" style="width: 100%;">
					@foreach ($variantList as $variant)
						<option selected="selected">{{ $variant->variant }}</option>
					@endforeach
				</select>
			</div><!-- /.form-group -->
			
			<div class="form-group">
				<label>Year of Purchase</label>
				<select class="form-control select2" data-placeholder="Mention Year of Purchase" name="age" id="age" style="width: 100%;">
					<option>2016</option>
					<option>2015</option>
					<option>2014</option>
					<option>2013</option>
					<option>2012</option>
					<option>2011</option>
					<option>2010</option>
					<option>2009</option>
					<option>2008</option>
					<option>2007</option>
					<option>2006</option>
				</select>
			</div><!-- /.form-group -->
			
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" name="address" id="address" placeholder="Please enter your Address" required>
			</div><!-- /.form-group -->
			
			<input type="hidden" name="status" id="status" value="review" >
			<input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}" >
		</div><!-- /.col -->
		
	</div><!-- /.row -->
	
</div><!-- /.box-body -->
<div class="box-footer">
	<button type="submit" class="btn btn-info pull-right">
		Post
	</button>
</div>