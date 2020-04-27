@section('title','Toilets')
@extends('admin.layouts.app')
@section('toilet.show')

<section>
    	<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-1 d-flex align-items-start flex-column">
						<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
					</div>
					<div class="col-md text-center">
    					<h2>Toilets of <b>{{ $name }}</b></h2>
    				</div><!-- /.col -->
    			</div><!-- /.row -->
				<HR width=20%>

    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->
		<div class="content-header">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th width="1%">Id</th>
					<th width="1%">Owner id</th>
					<th>Toilet name</th>
					<th width="1%">Price</th>
					<th>Complex</th>
					<th>Address</th>
					<th>Status</th>
					<th>Created on</th>
					<th>Map</th>
				</tr>
				</thead>
				<tbody>
					@if( count($toilets) == 0 )
						<tr><td colspan="9"><center><h2>No Toilets registered</h2><hr></center></td></tr>
					@else
						@foreach($toilets as $toilet)
						    <tr>
								<th scope="row">{{ $toilet->id }}</th>
								<td title="{{ $toilet->owner['email'] }}">
									{{ $toilet->owner['id'] }}
								</td>
								<td>{{ $toilet->toilet_name }}</td>
								<td><b>${{ $toilet->price }}</b></td>
								<td>{{ $toilet->complex_name }}</td>
								<td>{{ $toilet->address.$toilet->getFullAddress() }}</td>
								<td>
									@if($toilet->status==1) <f class="text-success">Active</f> @else <f class="text-warning">Not Active</f> @endif
								</td>
								<td>{{ $toilet->created_at->format('d/m/Y').' at '.$toilet->created_at->format('g:i A') }}</td>
								<td>
									<button class="btn btn-success" name="btn" type="" value="1">Map</button>&nbsp;&nbsp;
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