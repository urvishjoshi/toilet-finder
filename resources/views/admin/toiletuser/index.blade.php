@section('title','Toiletousers')
@extends('admin.layouts.app')
@section('toiletuser.index')

<section>
    	<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md text-center">
    					<h2>Toilet Users</h2>
    				</div><!-- /.col -->
    			 <!--Kishan changed  (Removed column for breadcrumb)-->

    			</div><!-- /.row -->
    			<HR width=50%>
    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->
		<div class="content-header">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
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
					<th width="20%">View</th>
				</tr>
				</thead>
				<tbody>
					@if( count($users) == 0 )
						<tr><td colspan="6"><center><h2>No Requests</h2><hr></center></td></tr>
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
								<form action="{{ route('a.toiletusers.destroy',$user->id) }}" method="POST">
								@method('DELETE') @csrf

									<a href="{{ route('a.toiletusers.show',[$user->id,'view'=>$user->name]) }}" class="btn btn-sm btn-success" name="btn" type="submit" value="view">View</a>&nbsp;
									
									<a href="{{ route('a.toiletusers.show',[$user->id,'edit'=>$user->name]) }}" class="btn btn-sm btn-secondary" name="btn" type="submit" value="view">Edit</a>&nbsp;

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
    </section>
@endsection