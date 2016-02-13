<!-- Main row -->
<div class="row">
	<!-- Left col -->
	<div class="col-md-12">
		<!-- TABLE: LATEST ORDERS -->
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Executed Request</h3>
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

							@foreach($serviceWorkings as $service)

							<tr>
								<form role="form" method="POST" action="/complete" >
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<td><!-- <a href="{{url('admin/{$service->id}')}}"> -->{{$service->created_at}}</a></td>
									<td>{{$service->brand}}</td>
									<td>{{$service->product}}</td>
									<td>{{$service->variant}}</td>
									<td>{{$service->pincode}}</td>
									<td>{{$service->technician}}</td>
									
									<td>
										<select class="form-control select2" data-placeholder="Select Technician" name="status" id="status" style="width: 100%;">
											<option>Completed</option>
											<option>Cancelled</option>
											<option>Pending</option>
										</select>
									</td>

									<td>
									<button type="submit" name="submit" value="{{$service->id}}" class="label bg-green">
										Update
									</button></td>
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