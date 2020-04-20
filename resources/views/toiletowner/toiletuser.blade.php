@section('title','Toiletuser')
@extends('toiletowner.layouts.app')

@section('toiletuser')
    <section>
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Your Toilet Users</h1>
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
					<th scope="col">User name</th>
					<th scope="col">User email</th>
					<th scope="col">Toilet used</th>
					<th scope="col">Approve this usage</th>
					{{-- <th scope="col">View</th> --}}
					<th scope="col">Used on</th>
					<th scope="col">Reply user</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>a@b.c</td>
						<td>XYZ toilet</td>
						<td>Yes | No</td>
						{{-- <td>views</td> --}}
						<td>27-05-2020</td>
						<td>Send msg</td>
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>a@b.c</td>
						<td>XYZ toilet</td>
						<td>Yes | No</td>
						{{-- <td>views</td> --}}
						<td>27-05-2020</td>
						<td>Send msg</td>
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>a@b.c</td>
						<td>XYZ toilet</td>
						<td>Yes | No</td>
						{{-- <td>views</td> --}}
						<td>27-05-2020</td>
						<td>Send msg</td>
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>a@b.c</td>
						<td>XYZ toilet</td>
						<td>Yes | No</td>
						{{-- <td>views</td> --}}
						<td>27-05-2020</td>
						<td>Send msg</td>
					</tr>
				</tbody>
			</table>
			</div>
			</div>	
	</div>
    </section>
@endsection
