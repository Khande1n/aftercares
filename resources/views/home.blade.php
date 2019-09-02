@extends('layouts.pages')

@section('title')

<title>AfterCares | Dashboard</title>

@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Dashboard <small>Last Visited</small></h1>
		<ol class="breadcrumb">
			<li>
				<a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">
				Dashboard
			</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Info boxes -->
		<div class="row"></div><!-- /.row -->

		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<div class="col-md-12">
				<!-- TABLE: LATEST ORDERS -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Latest Orders</h3>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse">
								<i class="fa fa-minus"></i>
							</button>
							<button class="btn btn-box-tool" data-widget="remove">
								<i class="fa fa-times"></i>
							</button>
						</div>
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="table-responsive">
							<table class="table no-margin">
								<thead>
									<tr>
										<th>Request Date</th>
										<th>Brand</th>
										<th>Product</th>
										<th>Variant</th>
										<th>Purchase</th>
										<th>Info</th>
										<th>Technician</th>
										<th>Status</th>
										<th>Rating</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($services as $service)
									<tr>
										<td><a href="pages/examples/invoice.html">{{$service->created_at}}</a></td>
										<td>{{$service->brand}}</td>
										<td>{{$service->product}}</td>
										<td>{{$service->variant}}</td>
										<td>{{$service->age}}</td>
										<td>{{$service->detail}}</td>
										<td>{{$service->technician}}</td>
										
										@if($service->status == "Pending")
										<td><span class="label label-warning">{{$service->status}}</span></td>
										@elseif($service->status == "Working")
										<td><span class="label label-info">{{$service->status}}</span></td>
										@elseif($service->status == "Completed")
										<td><span class="label label-success">{{$service->status}}</span></td>
										@elseif($service->status == "Cancelled")
										<td><span class="label label-danger">{{$service->status}}</span></td>
										@endif
										
										@if($service->rating == "0")
										<td><span class="label bg-purple">Not Rated</span></td>
										@elseif($service->rating == "1")
										<td><span class="label label-warning">{{$service->rating}}</span></td>
										@elseif($service->rating == "2")
										<td><span class="label label-info">{{$service->rating}}</span></td>
										@elseif($service->rating == "3")
										<td><span class="label label-navy">{{$service->rating}}</span></td>
										@elseif($service->rating == "4")
										<td><span class="label bg-teal-active">{{$service->rating}}</span></td>
										@elseif($service->rating == "5")
										<td><span class="label label-success">{{$service->rating}}</span></td>
										@endif
										
									</tr>
									@endforeach
									
								</tbody>
							</table>
						</div><!-- /.table-responsive -->
					</div><!-- /.box-body -->
					<div class="box-footer clearfix">
						<a href="javascript::;" class="btn  btn-info btn-flat pull-left" id="newOrder">Place New Service Request</a>
						<a href="javascript::;" class="btn  btn-default btn-flat pull-right">View All Orders</a>
					</div><!-- /.box-footer -->
				</div><!-- /.box -->
			</div><!-- /.col -->

		</div><!-- /.row -->

		@include('request.index')

		@include('auth/emails.dashboard')

	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

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

			$("#newRequestDiv").hide(500);
		});
		
		
	}); 
</script>

<script>
//Send Email Home
	$(document).ready(function() {

		$("#sendEmailDashboard").submit(function(event) {
			event.preventDefault();
			console.log('Done');
			// var emailto 	= $('input:disabled').val();
			var subject 	= $('#subject').val();
			var mailcontent = $('#mailcontent').val();

			$.ajax({
				url : "{{url('/email/home')}}",
				data : {
					// emailto 	: emailto,
					subject 	: subject,
					mailcontent : mailcontent
				},
				type : "POST",
				dataType : "json"
			}).done(function(data) {
				swal("Submitted!", "Your Email have been submitted successfully!", "success");
			}).error(function(data) {
				swal.showInputError("Oppss, Something went wrong!");
			});	
		});		
	}); 
	
</script>

@endsection
