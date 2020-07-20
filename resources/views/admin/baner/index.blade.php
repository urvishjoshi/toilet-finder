@section('title','Baners')
@extends('admin.layouts.app')
@section('feedback')

<section>
	<!-- Content Header (Page header) -->
	<div class="content pt-4">
		<div class="container-fluid">
			<div class="row">
				
				<div class="col-3"></div>
				<div class="col-md text-center">
					<h2>App Baners</h2>
				</div>
				<div class="col-md-3 text-right pr-4">
					<button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Add Baners</button>
				</div>
			</div>
			<HR width=30%>

		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="container justify-content-center" id="requestTable">
				<div class="card">
					<div class="card-header border-0 p-0">
						<div class="container justify-content-center p-0" id="requestTable">
							<table class="table align-items-center table-hover table-flush text-center mb-0">
								<thead>
									<tr class="thead-light">
										<th scope="col">Baner Id</th>
										<th scope="col">Image</th>
										<th scope="col">Image URL</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									@if( count($baners) == 0 )
									<tr><td colspan="4"><center><h2>No baners</h2></center></td></tr>
									@else
									@foreach($baners as $baner)
									<tr>
										<th scope="row">{{ $baner->id }}</th>
										<td title="{{$baner->image}}">
											<img src="{{ asset('storage/baners/'.$baner->image) }}" alt="No image" width="80%">
										</td>
										<td>{{ $baner->url }} <a href="{{ asset('storage/baners/'.$baner->image) }}" target="_blank"><i class="fas fa-external-link-alt"></i></a></td>
										<td>
											<form action="{{ route('a.baners.destroy',$baner->id) }}" method="POST">
												@csrf @method('DELETE')
												<button class="btn btn-sm btn-danger" name="btn" type="submit" value="delete">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="{{ route('a.baners.store') }}" method="POST" id="form" enctype="multipart/form-data"
>
				@method("POST") @csrf
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add baner</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="delCountryDiv">
					<div class="">
						<div class="col-lg">
							<div class="form-group">
								<label for="countryId" class="form-label">Select Image</label>
								<input type="file" name="file" class="form-control p-1" required>
								@error('file')
								<span class="text-danger font-14" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-success" name="add">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
@section('jquery')
<script>
	@if($errors->any())
		$('#exampleModal').modal('show');
	@endif
</script>
@endsection
@endsection