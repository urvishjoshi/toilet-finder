@section('title','Toiletuser')
@extends('toiletowner.layouts.app')

@section('toiletuser.index')
    <section>
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
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
		<div class="content-header mt-0 pt-0">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th scope="col" center>Id</th>
					<th scope="col">Toilet name</th>
					<th scope="col">Address</th>
					<th scope="col">Usages</th>
					<th scope="col">View</th>
				</tr>
				</thead>
				<tbody>
				@if( count($usages) == 0 )
					<tr><td colspan="5"><center><h2>No usages yet</h2><hr></center></td></tr>
				@else
					@foreach($usages as $usage)
						<tr>
							<td>{{ $usage['id'] }}</td>
							<td>{{ $usage['toilet_name'] }}</td>
							<td title="{{ $usage->getFullAddress() }}">
								{{ $usage['address'] }}
							</td>
							<td title="{{ count($usage->usages) }} peoples used this toilet">
								{{ count($usage->usages) }}
							</td>
							<td>
								<a href="{{ route('toiletusers.show',['id'=>$usage['id'],'toilet'=>$usage['toilet_name']]) }}" class="btn btn-primary" name="view">View</a>
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
