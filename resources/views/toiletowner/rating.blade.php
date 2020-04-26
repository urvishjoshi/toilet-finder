@section('title','Ratings')
@extends('toiletowner.layouts.app')

@section('rating')
    <section>
		<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md text-center">
    					<h2>Your Toilet Ratings</h2>
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
					<th>Id</th>
					<th>Toilet id</th>
					<th>Toilet name</th>
					<th>User id</th>
					<th>Rated</th>
					<th width="40%">Review</th>
					<th width="20%">Rated on</th>
				</tr>
				</thead>
				<tbody>
				@foreach($ratings as $rating)
					<tr>
						<th scope="row">{{ $rating->id }}</th>
						<td>{{ $rating->toilet_id }}</td>
						<td title="{{ $rating->toilet['address'] }}">
							{{ $rating->toilet['toilet_name'] }}
						</td>
						<td title="{{ $rating->user['name'].' - '.$rating->user['email'] }}">
							{{ $rating->user_id }}
						</td>
						<td>{{ $rating->rating }}</td>
						<td>{{ $rating->desc }}</td>
						<td>{{ $rating->created_at->format('d/m/Y').' at '.$rating->created_at->format('g:i A') }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>
			</div>	
	</div>
    </section>
@endsection
