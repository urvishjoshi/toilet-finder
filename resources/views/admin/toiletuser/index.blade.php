@section('title','Toiletousers')
@extends('admin.layouts.app')
@section('toiletuser.index')

<section>
	<!-- Content Header (Page header) -->
	<div class="content pt-4 px-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-3"></div>
				<div class="col-md text-center">
					<h2>Toilet Users</h2>
				</div>
				<div class="col-md-3 text-right">
					<a href="{{route('a.toiletusers.create')}}" class="btn btn-primary">Add Users</a>
				</div>
			</div><!-- /.row -->
			<HR width=50%>
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
										<th center>Id</th>
										<th>User name</th>
										<th>User email</th>
										<th>Mobile no</th>
										<th>Gender</th>
										<th>Age</th>
										<th>Registered on</th>
										<th>Usages</th>
										<th width="15%">Action</th>
									</tr>
								</thead>
								<tbody>
									@if( count($users) == 0 )
									<tr><td colspan="9"><center><h2>No Requests</h2></center></td></tr>
									@else
									@foreach($users as $user)
									<tr>
										<th scope="row">{{ $user->id }}</th>
										<td>{{ $user->name }}</td>
										<td>{{ $user->email }}</td>
										<td>{{ $user->mobileno }}</td>
										<td>{{ $user->gender==1 ? 'Male' : 'Female' }}</td>
										<td>{{ $user->age }}</td>
										<td>{{ $user->created_at->format('d/m/Y').' at '.$user->created_at->format('g:i A') }}</td>
										<td>{{ count($user->toiletusages) }}</td>
										<td>
											<form action="{{ route('a.toiletusers.destroy',$user->id) }}" method="POST" class="d-flex">
												@method('DELETE') @csrf

												<a href="{{ route('a.toiletusers.show',[$user->id,'view'=>$user->name]) }}" class="btn btn-sm btn-success" name="btn" type="submit" value="view">Usages</a>&nbsp;

												<a href="{{ route('a.toiletusers.show',[$user->id,'edit'=>$user->name]) }}" class="btn btn-sm btn-secondary mx-1" name="btn" type="submit" value="view">Edit</a>&nbsp;

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
@endsection