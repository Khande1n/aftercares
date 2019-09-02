@extends('layouts.pages')

@section('title')

<title>Rent| AfterCares</title>

@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1> Rent: AC </h1>
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
							<div class="col-md-4">
								<h1> Rental Detail</h1>
								
								<div class="form-group">
									<label>Product: {{ $rentData->product }}</label>
								</div>
								<div class="form-group">
									<label>Variant: {{ $rentData->variant }}</label>
								</div>
								<div class="form-group">
									<label>Age: {{ $rentData->age }}</label>
								</div>
								<div class="form-group">
									<label>Status: {{ $rentData->status }}</label>
								</div>
							</div>
							<div class="col-md-8">
								@foreach ($rentData->photos->chunk(2) as $set)
								<div class="row">
									@foreach ($set as $photo)
									<div class="col-md-6">
										<img src="{{ $photo->thumbnail_path }}" alt="" >
										
										<form method="POST"  action="/photos/{{ $photo->id }}">
											{!! csrf_field() !!}
											<input type="hidden" name="_method" value="DELETE" />
											<button type="submit">
												Delete
											</button>
										</form>
									</div>
									@endforeach
								</div>
								@endforeach

								@if (Auth::user()->id == $rentData->user_id )
								
								<div class="box-header with-border">
									<h3>Add one photo of equipment here</h3>
									<form id="addPhotoAc" action="/{{$rentData->user_id}}/{{$rentData->product}}/{{$rentData->status}}/photo" method="POST" class="dropzone">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
									</form>
								</div>
								@endif

							</div>
						</div><!-- /.box-header -->

						<div class="box-footer">
							<button type="submit" id="rentalAdDone" class="btn btn-info pull-right">
								Done
							</button>
						</div>

					</div><!-- /.box -->
				</div>
			</div><!-- /.box -->
		</div><!-- /.col -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection

@section('jquery')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

<script>
	Dropzone.options.addPhotoAc = {

		paramName : 'photo',
		maxFilesize : 1,
		acceptedFiles : '.jpg, .jpeg, .png, .bmp',
	}; 
</script>

<script>
	$(document).ready(function() {
		
		$("#rentalAdDone").click(function(event) {
			event.preventDefault();
			
			swal("Submitted!", "Your request have been submitted successfully!", "success");
			
			window.location.replace("/");
		});
	}); 
</script>

@endsection
