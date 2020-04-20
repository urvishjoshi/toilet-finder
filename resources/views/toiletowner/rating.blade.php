@section('title','Ratings')
@extends('toiletowner.layouts.app')

@section('rating')
    <section>
		<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Your Toilet Ratings</h1>
    				</div><!-- /.col -->
    			 <!--Kishan changed  (Removed column for breadcrumb)-->

    			</div><!-- /.row -->
    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->
		<div class="content-header">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th scope="col" center>Id</th>
					<th scope="col">Toilet name</th>
					<th scope="col">Complex</th>
					<th scope="col">Toilet address</th>
					<th scope="col">Ratings</th>
					<th scope="col">Reviews</th>
					{{-- <th scope="col">View</th> --}}
					{{-- <th scope="col">Used on</th> --}}
					
				</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>ABCDEF complex</td>
						<td>ABC,DEF,QWE</td>
						<td>⭐⭐⭐⭐⭐</td>
						<td>View all</td>
						{{-- <td>27-05-2020</td> --}}
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>ABCDEF complex</td>
						<td>ABC,DEF,QWE</td>
						<td>⭐⭐⭐⭐⭐</td>
						<td>View all</td>
						{{-- <td>27-05-2020</td> --}}
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>ABCDEF complex</td>
						<td>ABC,DEF,QWE</td>
						<td>⭐⭐⭐⭐⭐</td>
						<td>View all</td>
						{{-- <td>27-05-2020</td> --}}
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>ABCDEF complex</td>
						<td>ABC,DEF,QWE</td>
						<td>⭐⭐⭐⭐⭐</td>
						<td>View all</td>
						{{-- <td>27-05-2020</td> --}}
					</tr>
				</tbody>
			</table>
			</div>
			</div>	
	</div>
    </section>
@endsection
