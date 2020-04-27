@section('title','Sales')
@extends('toiletowner.layouts.app')

@section('sale')
    <section>
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md text-center">
    					<h2>Your Sales</h2>
    				</div><!-- /.col -->
    			</div>
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
					<th scope="col">Toilet Id</th>
					<th scope="col">Transact Id</th>
					<th scope="col">Toilet name</th>
					<th scope="col">User email</th>
					<th scope="col">Paid</th>
					<th scope="col">Used on	</th>
				</tr>
				</thead>
				<tbody>
					@if( count($sales) == 0 )
						<tr><td colspan="6"><center><h2>No sales yet</h2><hr></center></td></tr>
					@else
						@foreach($sales as $sale)
						    <tr>
								<td>{{ $sale->toilet['id'] }}</td>
								<td>{{ $sale->transaction_id }}</td>
								<td title="{{ $sale->toilet['address'] }}">
									{{ $sale->toilet['toilet_name'] }}
								</td>
								<td title="{{ $sale->user['name'] }}">
									{{ $sale->user['email'] }}
								</td>
								<td><b>${{ $sale->toilet['price'] }}</b></td>
								<td>{{ $sale->created_at->format('d/m/Y').' at '.$sale->created_at->format('g:i A') }}
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
