@section('title','Ratings')
@extends('admin.layouts.app')
@section('rating.index')

<section>
		<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md text-center">
    					<h2>Toilet Ratings</h2>
    				</div><!-- /.col -->

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
					<th>Toilet name</th>
					<th>Owner Id</th>
					<th>Votes</th>
					<th>Avg Rating</th>
					<th>View</th>
				</tr>
				</thead>
				<tbody>
				@foreach($toilets as $toilet)
					<tr>
						<th scope="row">{{ $toilet->id }}</th>
						<td>{{ $toilet->toilet_name }}</td>
						<td title="{{$toilet->owner['email']}}">
							{{ $toilet->owner_id }}</td>
						<td>
							{{ count($toilet->ratings) }}
						</td>
						<td title="{{ $toilet->getAverageRating() }}">
							@for ($i = 0; $i < 5; ++$i)
							    <i class="font-20 fa fa-star{{ $toilet->getAverageRating()<=$i?'-o':'' }}" aria-hidden="true"></i>
							@endfor
						</td>
						<td>
							<a href="{{ route('a.ratings.show',['id'=>$toilet->id,'name'=>$toilet->owner['name']]) }}" class="btn btn-primary" name="view">View</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>
			</div>	
	</div>
    </section>
@endsection