@section('title','Requests')
@extends('toiletowner.layouts.app')
@section('request')	
<section>

	<div class="container">
		<div class="container pt-3">
				<div class="container col-md-auto">
				<div class="row">
					<div class="col-md-1">
						
					</div>
					<div class="col-md text-center mr-4">
						<h2>Users request<b></b></h2>
						<hr width=30%>
					</div>
					<div class="col-md-1"></div>
				</div>
    		</div><!-- /.container-fluid -->
    	</div>
		
			<div class="container justify-content-center pt-3" id="requestTable">
				<table class="table table-hover">
				    <thead>
				    <tr class="thead-light">
						<th scope="col"width="1%">Id</th>
						<th scope="col">User name</th>
						<th scope="col">Email</th>
						<th scope="col">Contact</th>
						<th scope="col">Gender</th>
						<th scope="col">Asked on</th>
						<th scope="col" width="18%">Actions</th>
				    </tr>
				    </thead>
				    <tbody>
					@if( count($allRequests) == 0 )
						<tr><td colspan="7"><center><h2>No Requests</h2><hr></center></td></tr>
					@else
						@foreach($allRequests as $usage)
						    <tr>
								<th scope="row">{{ $usage->id }}</th>
								<td>{{ $usage->user['name'] }}</td>
								<td>{{ $usage->user['email'] }}</td>
								<td>{{ $usage->user['mobileno'] }}</td>
								<td>{{ $usage->user['gender']==1 ? 'Male' : 'Female' }}</td>
								<td>{{ $usage->created_at->format('d/m/Y').' at '.$usage->created_at->format('g:i A') }}</td>
								<td>
								<form action="{{ route('requests.update',$usage->id) }}" method="POST">
								@method('PUT') @csrf
									
									<button class="btn btn-success" name="btn" type="submit" value="1">Approve</button> &nbsp;&nbsp;
									<button class="btn btn-danger" name="btn" type="submit" value="-1">Deny</button>

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