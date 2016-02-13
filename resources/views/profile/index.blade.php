@extends('layouts.pages')

@section('title')

<title>User Profile| AfterCares</title>

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

@if ($errors->has())
    <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
        {{ $error }}<br>        
      @endforeach
    </div>
@endif

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> User Profile</h1>
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
						<div class="box-header with-border">
							<h3 class="box-title">Place Update Your Profile</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-minus"></i>
								</button>
								<button class="btn btn-box-tool" data-widget="remove">
									<i class="fa fa-remove"></i>
								</button>
							</div>
						</div><!-- /.box-header -->
						<form role="form"  method="PATCH" action="/profile/update/{id}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<div class="box-body">
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" id="name" value="{{$userData->name}}" placeholder="" />
										</div><!-- /.form-group -->
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="email" id="email" value="{{$userData->email}}" placeholder="" required />
										</div><!-- /.form-group -->
										<div class="form-group">
											<label>Contact</label>
											<input type="text" class="form-control" name="contact" id="contact" value="{{$userData->contact}}" maxlength="10" placeholder="" required />
										</div><!-- /.form-group -->
										<div class="form-group">
											<label>Address</label>
											<input type="textarea" class="form-control" name="address" id="address" value="{{$userData->address}}" placeholder="">
										</div><!-- /.form-group -->
									</div><!-- /.col -->
								</div><!-- /.row -->
							</div><!-- /.box-body -->
							<div class="box-footer">
								<button type="submit" class="btn btn-info pull-right" id="updateProfile" >
									Update
								</button>
							</div>
						</form>
					</div><!-- /.box -->
				</div>
			</div><!-- /.box -->
		</div><!-- /.col -->
	</section><!-- /.content -->

</div><!-- /.content-wrapper -->


@endsection


