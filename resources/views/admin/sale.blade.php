@section('title','Sales')
@extends('admin.layouts.app')
@section('sale')

<section>
    	<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
					<div class="col-md text-center">
    					<h2>Your Toilet Users</h2>
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
					<th scope="col" center>Id</th>
					<th scope="col">Owner name</th>
					<th scope="col">User name</th>
					<th scope="col">Toilet used</th>
					<th scope="col">Used on</th>
					<th scope="col">Paid</th>
					<th scope="col">View</th>
				</tr>
				</thead>
				<tbody>
					@if( count($data) == 0 )
						<tr><td colspan="6"><center><h2>No Requests</h2><hr></center></td></tr>
					@else
						@foreach($data as $toiletInfo)
						    <tr>
								<th scope="row">{{ $toiletInfo->id }}</th>
								<td>{{ $toiletInfo->name }}</td>
								<td>{{ $toiletInfo->email }}</td>
								<td>{{ $toiletInfo->mobileno }}</td>
								<td>{{ $toiletInfo->created_at }}</td>
								<td>
								<form action="" method="POST">
									
									<button class="btn btn-success" name="approveBtn" type="submit" value="{{ $toiletInfo->id }}">Approve</button> &nbsp;&nbsp;
									<button class="btn btn-primary" name="approveBtn" type="submit" value="{{ $toiletInfo->id }}">View</button> &nbsp;&nbsp;
									<button class="btn btn-danger" name="denyBtn" type="submit" value="{{ $toiletInfo->id }}">Deny</button>

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