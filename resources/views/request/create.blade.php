@extends('layouts.pages')

@section('title')

<title> New Service Request| AfterCares</title>

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Service Request <small></small></h1>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row"></div><!-- /.row -->
		<div class="box box-info" id="newRequestDiv">
			<!-- SELECT2 EXAMPLE -->
			<div class="box box-default">
				<div class="box-header with-border">
					<h3 class="box-title">Submit New Service Request</h3>
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
									<input type="textarea" class="form-control" name="detail" id="detail" placeholder="Please enter your Pincode">
								</div><!-- /.form-group -->
								<input type="hidden" name="status" id="status" value="Pending">
								<!-- /Initial Request Status -->
								<input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}" >
								<!-- /User Id of submitter -->
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
	</section>
</div>

@endsection


@section('jquery')

<script>
	//Initialize Select2 Elements
	$(".select2").select2({
		tags : true
	}); 
</script>

<script>
	$(document).ready(function() {
		$("#newOrder").click(function() {
			$("#newRequestDiv").toggle(500);
		});

		$("#serviceRequestForm").submit(function(event) {
			event.preventDefault();
			
			var brand = $('#brand').val();
			var product = $('#product').val();
			var variant = $('#variant').val();
			var age = $('#age').val();
			var detail = $('#detail').val();
			var status = $('#status').val();
			var user_id = $('#user_id').val();

			$.ajax({
				url : "{{url('/newrequest')}}",
				data : {
					brand : brand,
					product : product,
					variant : variant,
					age : age,
					detail : detail,
					status: status,
					user_id : user_id
				},
				type : "POST",
				dataType : "json"
			}).done(function(data) {
				swal("Submitted!", "Your request have been submitted successfully!", "success");
			}).error(function(data) {
				swal.showInputError("Oppss, Something went wrong!");
			});

			window.location.replace("/home").delay(500);
			// $("#newRequestDiv").hide(500);
		});
		
		
	}); 
</script>

@endsection


