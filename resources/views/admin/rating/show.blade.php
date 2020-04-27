@section('title','Ratings')
@extends('admin.layouts.app')
@section('rating.show')

<section>
		<div class="container pt-4 px-3">
			<div class="row">
				<div class="col-md-1 d-flex align-items-start flex-column">
					<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
				</div>
				<div class="col-md text-center">
					<h2>Toilet Ratings of <b>{{$name}}</b></h2>
				</div><!-- /.col -->
				<div class="col-md-1"></div>
			</div>
    			<HR width=60%>
				
    		</div><!-- /.container-fluid -->
		<div class="content-header">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th>Id</th>
					<th width="10%">Toilet name</th>
					<th width="8%">Owner Id</th>
					<th width="8%">User Id</th>
					<th width="20%">Rating</th>
					<th>Description</th>
				</tr>
				</thead>
				<tbody>
				@if( count($ratings) == 0 )
						<tr><td colspan="6"><center><h2>No Ratings done yet</h2><hr></center></td></tr>
				@else
				@foreach($ratings as $rating)
					@for($i=0;$i<count($rating->ratings);$i++)
					<tr>
						
						<th scope="row">{{$rating->ratings[$i]['id']}}</th>
						<td>{{ $rating['toilet_name'] }}</td>
						<td>
							{{ $rating['owner_id'] }}
						</td>
						<td>{{ $rating->ratings[$i]['user_id'] }}</td>
						<td title="{{ $rating->ratings[$i]['rating'] }}">
							@for ($j = 0; $j < 5; ++$j)
							    <i class="font-20 fa fa-star{{ ($rating->ratings[$i]['rating'])<=$j?'-o':'' }}" aria-hidden="true"></i>
							@endfor
						</td>
						<td>{{ $rating->ratings[$i]['desc'] }}</td>
					</tr>
					@endfor
				@endforeach
				@endif
				</tbody>
			</table>
			</div>
			</div>	
	</div>
    	</div>
    	<!-- /.content-header -->
    </section>
@endsection