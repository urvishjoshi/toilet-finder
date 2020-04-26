@section('title','Requests')
@extends('admin.layouts.app')
@section('request.index')	
<?php $active=route('a.requests.show',['status'=>'1']); 
$denied=route('a.requests.show',['status'=>'-1']); ?>
<section>

	<div class="container pt-4">
		<div class="container col-md-auto">
		<div class="row">
			<div class="col-md-auto d-flex align-items-end flex-column ml-3" title="Active users">
				<a class="badge badge-pill badge-success font-14 style" href="{{ $active }}">
					{{ count($data->allActives) }}
				</a>
				<a href="{{ $active }}" class="fas fa-user-check" style="font-size: 34px;color: black;text-decoration:none; "></a>
			</div>
			<div class="col-md text-center">
				<h2>Toilet owner pending requests</h2>
			</div>
			<div class="col-md-auto d-flex align-items-end flex-column mr-3" title="Denied users">
				<a class="badge badge-pill badge-warning font-14 style" href="{{ $denied }}">
					{{ count($data->allDeactives) }}
				</a>
				<a href="{{ $denied }}" class="fas fa-user-times" style="font-size: 36px;color: black;text-decoration:none; "></a>
			</div>
		</div>
		
		<HR width=50%>
			<div class="container justify-content-center pt-3" id="requestTable">
				<table class="table table-hover">
				    <thead>
				    <tr class="thead-light">
						<th scope="col"width="1%">Id</th>
						<th scope="col">Toilet owner</th>
						<th scope="col">Email</th>
						<th scope="col">Contact</th>
						<th scope="col">Registered on</th>
						<th scope="col" width="26%">Actions</th>
				    </tr>
				    </thead>
				    <tbody>
					@if( count($data->allRequests) == 0 )
						<tr><td colspan="6"><center><h2>No Requests</h2><hr></center></td></tr>
					@else
						@foreach($data->allRequests as $owner)
						    <tr>
								<th scope="row">{{ $owner->id }}</th>
								<td>{{ $owner->name }}</td>
								<td>{{ $owner->email }}</td>
								<td>{{ $owner->mobileno }}</td>
								<td>{{ $owner->created_at->format('d/m/Y').' at '.$owner->created_at->format('g:i A') }}</td>
								<td>
								<form action="{{ route('a.requests.update',$owner->id) }}" method="POST">
								@method('PUT') @csrf
									
									<button class="btn btn-success" name="btn" type="submit" value="1">Approve</button> &nbsp;&nbsp;
									<a href="{{ route('a.toiletowners.show',['id'=>$owner->id,'name'=>$owner->name]) }}" class="btn btn-primary" name="view">View</a>&nbsp;&nbsp;
									<button class="btn btn-warning" name="btn" type="submit" value="-1">Deny</button>

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