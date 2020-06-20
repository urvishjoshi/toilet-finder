@section('title','Toiletowner')
@extends('admin.layouts.app')
@section('toiletowner.index')
<section>

	<div class="container pt-4 px-3">
		<div class="container col-md-auto">
			<div class="row">
				<div class="col-md text-center">
					<h2>Active Toilet owners</h2>
				</div>
			</div>
			<hr width=35%>
		{{-- <div class="panel panel-default">
			<div class="panel-heading">Search the Data</div>
			<div class="panel-body">
				<input type="text" name="search" id="search" class="form-control" placeholder="Enter name">
			</div>
		</div> --}}
		<div class="card">
			<div class="card-header border-0 p-0">
				<div class="container justify-content-center p-0" id="requestTable">
					<table class="table align-items-center table-hover table-flush text-center mb-0">
						<thead>
							<tr class="thead-light">
								<th>Id</th>
								<th>Email</th>
								<th>Toilets owned</th>
								<th>Auto allocate</th>
								<th>Registered on</th>
								<th width="1%">Action</th>
							</tr>
						</thead>
						<tbody>
							@if( count($activeOwners) == 0 )
							<tr><td colspan="6"><center><h2>No Record found</h2><hr></center></td></tr>
							@else
							@foreach($activeOwners as $owner)
							<tr>
								<th scope="row">{{ $owner->id }}</th>
								<td>{{ $owner->email }}</td>
								<td>{{ count($owner->toilets) }}</td>
								<td>
									{{ $owner->auto_allocate=='1' ? 'On' : 'Off' }}
								</td>
								<td>{{ $owner->created_at->format('d/m/Y').' at '.$owner->created_at->format('g:i A') }}</td>
								<td class="d-flex">
									<a href="{{ route('a.toilets.show',['id'=>$owner->id,'name'=>$owner->name]) }}" class="btn btn-success" name="view">View</a>
									<a href="{{ route('a.toiletowners.show',['id'=>$owner->id,'name'=>$owner->name]) }}" class="btn btn-secondary mx-2" name="edit">Edit</a>
									<form action="{{ route('a.toiletowners.destroy',$owner->id) }}" method="POST">
										@csrf @method('DELETE')
										<button type="submit" class="btn btn-danger" name="delete">Delete</button>
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

</section>

@endsection