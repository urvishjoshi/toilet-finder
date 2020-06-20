@section('title','Toiletowners Status')
@extends('admin.layouts.app')
@section('request.show')
	<section>
		<div class="container pt-3 px-3">
			<div class="row">
				<div class="col-md-1 d-flex align-items-start flex-column">
					<a href="{{ route('a.requests.index') }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
				</div>
				<div class="col-md text-center">
					<h2 class="mb-0"> {{$status==1 ? 'Active owners' : 'Denied owners'}}</h2>
				</div>
				<div class="col-md-1"></div>
			</div>

			<HR width=30% class="mt-1">
			<div class="container justify-content-center" id="requestTable">
				<div class="card">
					<div class="card-header border-0 p-0">
						<div class="container justify-content-center p-0" id="requestTable">
							<table class="table align-items-center table-hover table-flush text-center mb-0">
								<thead>
									<tr class="thead-light">
										<th scope="col" width="1%">Id</th>
										<th scope="col">Name</th>
										<th scope="col">Username</th>
										<th scope="col">Registered on</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									@if( $owners->count() == 0 )
									<tr><td colspan="5"><center><h2>No owners</h2><hr></center></td></tr>
									@else
									@foreach($owners as $owner)
									<tr>
										<th scope="row">{{ $owner->id }}</th>
										<td>{{ $owner->name }}</td>
										<td>{{ $owner->email }}</td>
										<td>{{ $owner->created_at->format('d/m/Y').' at '.$owner->created_at->format('g:i A') }}</td>
										<td width="25%">
											<div class="row justify-content-center">

												<form action="{{ route('a.requests.update',$owner->id) }}" method="POST" class="form-inline">
													@method('PUT') @csrf

													<a href="{{ route('a.toiletowners.show',['id'=>$owner->id,'name'=>$owner->name]) }}" class="btn btn-primary" name="btn">View</a>&nbsp;&nbsp;
													@if( $status==-1 )
													<button class="btn btn-success" name="btn" type="submit" value="1">Approve</button>&nbsp;&nbsp;
													@else
													<button class="btn btn-warning" name="btn" type="submit" value="-1" onclick="return confirm('Denying a owner will remove all their toilets! Are you sure?');">Deny</button> &nbsp;&nbsp;
													@endif
												</form>

												@if( $status==-1 )
												<form action="{{ route('a.requests.update',$owner->id) }}" method="POST" class="form-inline">
													@method('DELETE') @csrf
													<button class="btn btn-danger" name="btn" type="submit" value="-2">Delete</button>&nbsp;&nbsp;
												</form>
												@endif

											</div>
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