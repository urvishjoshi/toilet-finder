@section('title','Toiletuser')
@extends('toiletowner.layouts.app')

@section('toiletuser.show')
    <section>
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row">
    			<div class="col-md-1 d-flex align-items-start flex-column">
					<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
				</div>
				<div class="col-md text-center">    					
					<h2>Users of <b>{{$toilet}}</b> Toilet</h2>
    			</div><!-- /.col -->
				<div class="col-md-1"></div>
    			</div><!-- /.row -->
    			<HR width=40%>
    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->
		<div class="content-header pt-0">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th>Transaction Id</th>
					<th>User email</th>
					<th>User name</th>
					<th>Gender</th>
					<th>Used on</th>
				</tr>
				</thead>
				<tbody>
				@if( count($usages) == 0 )
					<tr><td colspan="6"><center><h2>No usages yet</h2><hr></center></td></tr>
				@else
					@foreach($usages as $usage)
						<tr>
							<td>{{ $usage->transaction_id }}</td>
							<td>{{ $usage->user['email'] }}</td>
							<td>{{ $usage->user['name'] }}</td>
							<td>
								{{ $usage->user['gender']==1 ? 'Male' : 'Female'}}
							</td>
							<td>
								{{ $usage->created_at->format('d/m/Y').' at '.$usage->created_at->format('g:i A') }}
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
