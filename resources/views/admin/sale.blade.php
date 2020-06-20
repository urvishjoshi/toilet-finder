@section('title','Sales')
@extends('admin.layouts.app')
@section('sale')
@php $total=0;
foreach($sales as $sale) {
	$total+=$sale->toilet['price'];
} @endphp
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
				<div class="card">
					<div class="card-header border-0 p-0">
						<div class="container justify-content-center p-0" id="requestTable">
							<table class="table align-items-center table-hover table-flush text-center mb-0">
								<thead>
									<tr class="thead-light">
										<th scope="col">Id</th>
										<th scope="col">Transact Id</th>
										<th scope="col">Owner id</th>
										<th scope="col">User id</th>
										<th scope="col">Toilet id</th>
										<th title="Total revenue is KD'.$total.'" width=10%>
					                        Paid | <b style="color:#28a745;">KD{{$total}}</b>
					                    </th>
										<th scope="col">Used on</th>
									</tr>
								</thead>
								<tbody>
									@if( count($sales) == 0 )
									<tr><td colspan="7"><center><h2>No Requests</h2></center></td></tr>
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
										<td><b>KD{{ $sale->toilet['price'] }}</b></td>
										<td>{{ $sale->created_at->format('d/m/Y').' at '.$sale->created_at->format('g:i A') }}</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>
@endsection