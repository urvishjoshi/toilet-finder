@section('title','Toiletousers')
@extends('admin.layouts.app')
@section('toiletuser.show')

<section>
    	<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-1 d-flex align-items-start flex-column" title="Active users">
						<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-3" style="font-size: 30px;text-decoration:none; "></a>
					</div>
    				<div class="col-md text-center">
    					<h2><b>{{ $name }}</b></h2>
    				</div><!-- /.col -->
    				<div class="col-md-1">
    					
    				</div>
    			</div><!-- /.row -->
    			<HR width=40%>
    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->
		<div class="content-header">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th scope="col">Transact Id</th>
					<th scope="col">Owner Id</th>
					<th scope="col">User email</th>
					<th scope="col">Toilet used</th>
					{{-- <th scope="col">View</th> --}}
					{{-- <th scope="col">Manage</th> --}}
					
				</tr>
				</thead>
				<tbody>
					@if( count($usages) == 0 )
						<tr><td colspan="6"><center><h2>No Requests</h2><hr></center></td></tr>
					@else
						@foreach($usages as $usage)
						    <tr>
								<th>{{ $usage['transaction_id'] }}</th>
								<td>{{ $usage->owner['id'] }}</td>
								<td>{{ $usage->user['email'] }}</td>
								<td>{{ $usage->toilet['toilet_name'] }}</td>
								{{-- <td>
								<form action="{{ route('a.toiletusers.destroy',$usage) }}" method="POST">
								@method('DELETE') @csrf
									
									<button class="btn btn-danger" name="name" type="submit" value="{{ $usage->user['id'] }}">Delete</button>

								</form>
								</td> --}}
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