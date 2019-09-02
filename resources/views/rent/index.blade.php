@extends('layouts.pages')

@section('title')

<title>Rent| AfterCares</title>

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Put Your Appliances on Rent </h1>
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
							<h3 class="box-title">Please mention details below</h3>
							<div class="box-tools pull-right">
								<button class="btn btn-box-tool" data-widget="collapse">
									<i class="fa fa-minus"></i>
								</button>
								<button class="btn btn-box-tool" data-widget="remove">
									<i class="fa fa-remove"></i>
								</button>
							</div>
						</div><!-- /.box-header -->
						<form role="form"  method="Post" action="/rent" enctype="multipart/form-data">
							@include('rent.form')
						</form>
						
					</div><!-- /.box -->
				</div>
			</div><!-- /.box -->
		</div><!-- /.col -->
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



@endsection
