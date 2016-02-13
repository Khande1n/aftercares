<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Completed Order List</h3>
	</div><!-- /.box-header -->
	<div class="box-body">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Request Date</th>
					<th>Brand</th>
					<th>Product</th>
					<th>Variant</th>
					<th>Pincode</th>
					<th>Technician</th>
					<th>Status</th>
					<th>Rating</th>
				</tr>
			</thead>
			<tbody>
				@foreach($serviceCompletes as $service)
				<tr>
					<td>{{$service->created_at}}</td>
					<td>{{$service->brand}}</td>
					<td>{{$service->product}}</td>
					<td>{{$service->variant}}</td>
					<td>{{$service->pincode}}</td>
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
			<tfoot>
				<tr>
					<th>Request Date</th>
					<th>Brand</th>
					<th>Product</th>
					<th>Variant</th>
					<th>Pincode</th>
					<th>Technician</th>
					<th>Status</th>
					<th>Rating</th>
				</tr>
			</tfoot>
		</table>
	</div><!-- /.box-body -->
</div><!-- /.box -->
