@section('title','Ratings')
@extends('admin.layouts.app')
@section('rating')

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
					<th scope="col">Id</th>
					<th scope="col">Toil	et name</th>
					<th scope="col">Owner Id</th>
					<th scope="col">Ratings</th>
					<th scope="col">Description</th>
					{{-- <th scope="col">View</th> --}}
					{{-- <th scope="col">Used on</th> --}}
					
				</tr>
				</thead>
				<tbody>
				@foreach($ratings as $rating)
					<tr>
						<th scope="row">{{ $rating->id }}</th>
						<td>{{ $rating->toilet_name }}</td>
						<td>{{ $rating->ratings[1]['owner_id'] }}</td>
						<td></td>
						<td>ABC,DEF,QWE</td>
						{{-- <td>27-05-2020</td> --}}
					</tr>
				@endforeach
				</tbody>
			</table>
			</div>
			</div>	
	</div>
    </section>
@endsection