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
		<div class="content-header mt-0 pt-0">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th>Toilet id</th>
					<th>Toilet name</th>
					<th>User id</th>
					<th width="22%">Rated</th>
					<th width="40%">Review</th>
					<th width="15%">Rated on</th>
				</tr>
				</thead>
				<tbody>
				@if( count($ratings) == 0 )
						<tr><td colspan="6"><center><h2>No ratings yet</h2><hr></center></td></tr>
				@else
					@foreach($ratings as $rating)
						<tr>
							<td>{{ $rating->toilet_id }}</td>
							<td title="{{ $rating->toilet['address'] }}">
								{{ $rating->toilet['toilet_name'] }}
							</td>
							<td title="{{ $rating->user['name'] }}">
								{{ $rating->user['email'] }}
							</td>
							<td title="{{ $rating->rating }}">
								@for ($i = 0; $i < 5; ++$i)
								    <i class="font-20 fa fa-star{{ $rating->rating<=$i?'-o':'' }}" aria-hidden="true"></i>
								@endfor
							</td>
							<td>{{ $rating->desc }}</td>
							<td>{{ $rating->created_at->format('d/m/Y').' at '.$rating->created_at->format('g:i A') }}</td>
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
