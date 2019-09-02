@extends('layouts.pages')

@section('title')

<title>User Profile| AfterCares</title>

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> User Profile: {{$userData['name']}}</h1>
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
					<!-- SELECT2 EXAMPLE -->
					<div class="box box-default">
						<div class="box-body">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" id="name" value="" placeholder="{{$userData['name']}}" />
									</div><!-- /.form-group -->
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" name="email" id="email" value="" placeholder="{{$userData['email']}}" required />
									</div><!-- /.form-group -->
									<div class="form-group">
										<label>Contact</label>
										<input type="text" class="form-control" name="contact" id="contact" value="" maxlength="10" placeholder="{{$userData['contact']}}" required />
									</div><!-- /.form-group -->
									<div class="form-group">
										<label>Address</label>
										<input type="textarea" class="form-control" name="address" id="address" value="" placeholder="{{$userData['address']}}">
									</div><!-- /.form-group -->
								</div><!-- /.col -->
							</div><!-- /.row -->
						</div><!-- /.box-body -->
					</div><!-- /.box -->
				</div>
			</div><!-- /.box -->
		</div><!-- /.col -->
	</section><!-- /.content -->

</div><!-- /.content-wrapper -->

@endsection

