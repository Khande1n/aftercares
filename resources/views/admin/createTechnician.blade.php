@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>
			{{ $error }}
		</li>
		@endforeach
	</ul>
</div>
@endif


<!-- Info boxes -->
<div class="row"></div><!-- /.row -->
<div class="box box-info">
	<!-- SELECT2 EXAMPLE -->
	<div class="box box-default">
		<div class="box-header with-border">
			<h3 class="box-title">Register Technician</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse">
					<i class="fa fa-minus"></i>
				</button>
				<!-- <button class="btn btn-box-tool" data-widget="remove">
				<i class="fa fa-remove"></i>
				</button> -->
			</div>
		</div><!-- /.box-header -->
		<form role="form"  method="POST" action="/admin/createTechnician">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="box-body">
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter name of technician" required/>
						</div><!-- /.form-group -->
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Enter technician's valid email id"/>
						</div><!-- /.form-group -->
						<div class="form-group">
							<label>Contact</label>
							<input type="text" class="form-control" name="contact" id="contact" maxlength="10" placeholder="Enter technician's mobile number" required/>
						</div><!-- /.form-group -->
						<div class="form-group">
							<label>Address</label>
							<input type="textarea" class="form-control" name="address" id="address" placeholder="Enter technician's address" required/>
						</div><!-- /.form-group -->
						<input type="hidden" class="form-control" name="password" id="password" value="password123"/>
						<input type="hidden" class="form-control" name="password_confirmation" id="password_confirmation" value="password123"/>
						<input type="hidden" class="form-control" name="role_id" id="role_id" value="3"/>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.box-body -->
			<div class="box-footer">
				<button type="submit" class="btn btn-info pull-right">
					Register
				</button>
			</div>
		</form>
	</div><!-- /.box -->
</div>

