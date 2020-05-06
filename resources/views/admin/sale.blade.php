@section('title','Sales')
@extends('admin.layouts.app')
@section('sale')

<section>
    	<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
					<div class="col-md text-center">
    					<h2>Toilet Sales</h2>
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
					<th scope="col">Id</th>
					<th scope="col">Transact Id</th>
					<th scope="col">Owner id</th>
					<th scope="col">User id</th>
					<th scope="col">Toilet id</th>
					<th scope="col">Paid</th>
					<th scope="col">Used on</th>
				</tr>
				</thead>
				<tbody>
					@if( count($sales) == 0 )
						<tr><td colspan="7"><center><h2>No Requests</h2><hr></center></td></tr>
					@else
						@foreach($sales as $sale)
						    <tr>
								<th scope="row">{{ $sale->id }}</th>
								<td>{{ $sale->transaction_id }}</td>
								<td title="{{ $sale->owner['email'] }}">
									{{ $sale->owner['id'] }}
								</td>
								<td title="{{ $sale->user['email'] }}">
									{{ $sale->user['id'] }}
								</td>
								<td title="{{ $sale->toilet['toilet_name'] }}">
									{{ $sale->toilet_id }}
								</td>
								<td><b>${{ $sale->toilet['price'] }}</b></td>
								<td>{{ $sale->created_at->format('d/m/Y').' at '.$sale->created_at->format('g:i A') }}</td>
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