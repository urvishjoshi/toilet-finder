@section('title','Reports')
@extends('admin.layouts.app')
@section('report')
<section>
	<div class="container pt-3">
		<div class="container col-auto pb-0">
			<div class="row pb-0">
				<div class="col-md pb-0 text-center">
					<h2 class=" mb-0">Toilet Reports</h2>
				</div>
			</div>
			<HR width=50%>
		</div>
	</div>
	<div class="content-header mt-0 pt-1">
		<div class="container-fluid">
			<div>
				<form action="{{ route('a.reports.show',1) }}" method="post" id="form" class="row justify-content-center">
				@method('GET') @csrf
				<div class="col-md-auto" id="monthDiv">
					<select class="custom-select" id="selectRange" name="selectRange">
						<option disabled>Select range</option>
						<option value="7">7 days</option>
						<option value="31">30 days</option>
						<option value="6">6 months</option>
						<option value="12">1 year</option>
						<option value="1">All</option>
					</select>
				</div>
				<div class="col-md-auto">
					<button class="btn btn-primary" value="getRecord" name="getRecord" type="submit">Get Record</button>
				</div>
				</form>
			</div>
		</div>
		<div class="container-fluid justify-content-center mt-3">
			<table class="table table-hover">
				<thead><?php $total=0 ?>
				@foreach($sales as $sale)
					<?php $total+=$sale->toilet['price']; ?>
				@endforeach
				{{-- <tr>
					<td colspan="7">Total revenue is <b class="text-success">${{ $total }}</b></td>
				</tr> --}}
				<tr class="thead-light">
					<th>Id</th>
					<th>Transact Id</th>
					<th>Owner id</th>
					<th>User id</th>
					<th>Toilet id</th>
					<th title="Total revenue is ${{ $total }}">
						Paid | <b class="text-success">${{ $total }}</b>
					</th>
					<th>Used on</th>
				</tr>
				</thead>
				<tbody>
				@if( count($sales) == 0 )
					<tr><td colspan="7"><center><h2>No Reports found</h2><hr></center></td></tr>
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
</section>
@endsection
