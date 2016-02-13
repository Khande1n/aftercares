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
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<div class="col-md-12">
				<!-- TABLE: LATEST ORDERS -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Latest Request</h3>
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
										<th>Pincode</th>
										<th>Technician</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									
									@foreach($serviceDatas as $service)
									
									<tr>
										<form role="form" method="PATCH" action="admin/update/{id}" >
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<td><!-- <a href="{{url('admin/{$service->id}')}}"> -->{{$service->created_at}}</a></td>
										<td>{{$service->brand}}</td>
										<td>{{$service->product}}</td>
										<td>{{$service->variant}}</td>
										<td>{{$service->pincode}}</td>
										<td>
											<select class="form-control select2" data-placeholder="Select Technician" name="technician" id="technician" style="width: 100%;">
												@foreach($technicians as $technician)
													<option>{{$technician->name}}</option>
												@endforeach	
											</select>
										</td>
										
										@if($service->status == "Pending")
										<td><span class="label label-warning">{{$service->status}}</span></td>
										@elseif($service->status == "Working")
										<td><span class="label label-info">{{$service->status}}</span></td>
										@elseif($service->status == "Completed")
										<td><span class="label label-success">{{$service->status}}</span></td>
										@elseif($service->status == "Cancelled")
										<td><span class="label label-danger">{{$service->status}}</span></td>
										@endif
										
										<td><button type="submit" name="submit" value="{{$service->id}}" class="label bg-green" id="assignTech">Update</button></td>
										</form>
									</tr>
									@endforeach
									
								</tbody>
							</table>
						</div><!-- /.table-responsive -->
					</div><!-- /.box-body -->
					
					<div class="box-footer clearfix">
						<!-- <a href="javascript::;" class="btn  btn-info btn-flat pull-left" id="newOrder">Place New Service Request</a> -->
						<!-- <a href="javascript::;" class="btn  btn-default btn-flat pull-right">View All Orders</a> -->
					</div><!-- /.box-footer -->
				</div><!-- /.box -->
			</div><!-- /.col -->
		</div><!-- /.row -->

			@include('admin.adminServiceCompleteTable')
			@include('admin.adminFinalTable')
			@include('admin.createTechnician')
			@include('auth/emails.adminDashboard')
			
		
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection

@section('jquery')

<script>
	//Initialize Select2 Elements
	$(".select2").select2(); 
</script>

<script>
	$(document).ready(function() {

		$("#assignTech").submit(function(event) {
			event.preventDefault();

			var technician = $('#technician').val();
			var status = "Working";
			var submit = $('#assignTech').val();

			$.ajax({
				url : "{{url('admin/update/{id}')}}",
				data : {
					technician : technician,
					status : status,
					submit: submit
				},
				type : "PATCH",
				dataType : "json"
			}).done(function(data) {
				swal("Submitted!", "Your request have been submitted successfully!", "success");
			}).error(function(data) {
				swal.showInputError("Oppss, Something went wrong!");
			});

		});

	}); 
</script>


@endsection
