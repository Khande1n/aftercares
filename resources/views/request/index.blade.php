<div class="box box-info" id="newRequestDiv" style="display:none">
	<!-- SELECT2 EXAMPLE -->
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Place New Service Request</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse">
					<i class="fa fa-minus"></i>
				</button>
				<button class="btn btn-box-tool" data-widget="remove">
					<i class="fa fa-remove"></i>
				</button>
			</div>
		</div><!-- /.box-header -->
		<form role="form"  method="POST" action="/newrequest" id="serviceRequestForm">
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
								<option>2005</option>
								<option>2004</option>
								<option>2003</option>
								<option>2002</option>
								<option>2001</option>
								<option>2000</option>
								<option>1999</option>
								<option>1998</option>
								<option>1997</option>
								<option>1996</option>
							</select>
						</div><!-- /.form-group -->
						<div class="form-group">
							<label>Extra Info</label>
							<input type="textarea" class="form-control" name="detail" id="detail" placeholder="Please enter details to share, if any">
						</div><!-- /.form-group -->
						<input type="hidden" name="status" id="status" value="Pending"> <!-- /Initial Request Status -->
						<input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}" > <!-- /User Id of submitter -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-info pull-right" id="submitRequest">
					Submit Request
				</button>
			</div>
		</form>
	</div><!-- /.box -->
</div>
