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
					<th scope="col">Transact Id</th>
					<th scope="col">Toilet name</th>
					<th scope="col">User id</th>
					<th scope="col">Paid</th>
					<th scope="col">Used on	</th>
				</tr>
				</thead>
				<tbody>
					@if( count($sales) == 0 )
						<tr><td colspan="5"><center><h2>No sales yet</h2><hr></center></td></tr>
					@else
						@foreach($sales as $sale)
						@for($i=0;$i<count($sale->usages);$i++)
						    <tr>
								<td>{{ $sale->usages[$i]['transaction_id'] }}</td>
								<td>{{ $sale['toilet_name'] }}</td>
								<td>
									{{ $sale->usages[$i]['id'] }}
								</td>
								<td><b>${{ $sale['price'] }}</b></td>
								<td>{{ $sale->usages[$i]['created_at']->format('d/m/Y').' at '.$sale->usages[$i]['created_at']->format('g:i A') }}</td>
						    </tr>
						   @endfor
						@endforeach
					@endif
				</tbody>
			</table>
			</div>
			</div>	
	</div>
</section>
@endsection
