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
										<option>Samsung</option>
										<option>Hitachi</option>
										<option>Haier</option>
										<option>LG</option>
										<option>Panasonic</option>
										<option>Voltas</option>
									</select>
								</div><!-- /.form-group -->
								<div class="form-group">
									<label>Product</label>
									<select class="form-control select2" data-placeholder="Select AC Type" name="product" id="product" style="width: 100%;">
										<option selected="selected">Air Conditioner</option>
										<option>Geyser</option>
										<option>Refrigerator</option>
									</select>
								</div><!-- /.form-group -->
								<div class="form-group">
									<label>Variant</label>
									<select class="form-control select2" data-placeholder="Select AC Type" name="variant" id="variant" style="width: 100%;">
										<option selected="selected">Window</option>
										<option>Split</option>
										<option>Multi-Split</option>
										<option>VRV</option>
										<option>VRF</option>
									</select>
								</div><!-- /.form-group -->
								<div class="form-group">
									<label>Year of Purchase</label>
									<select class="form-control select2" data-placeholder="Mention Year of Purchase" name="age" id="age" style="width: 100%;">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15</option>
										<option>16</option>
										<option>17</option>
										<option>18</option>
										<option>19</option>
										<option>20</option>
										<option>21</option>
									</select>
								</div><!-- /.form-group -->
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" name="pincode" id="pincode" placeholder="Please enter your Pincode">
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
			var pincode = $('#pincode').val();
			var status = $('#status').val();
			var user_id = $('#user_id').val();

			$.ajax({
				url : "{{url('/newrequest')}}",
				data : {
					brand : brand,
					product : product,
					variant : variant,
					age : age,
					pincode : pincode,
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


