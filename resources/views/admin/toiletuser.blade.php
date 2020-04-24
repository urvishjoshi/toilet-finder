@section('title','Toiletousers')
@extends('admin.layouts.app')
@section('toiletuser')

<section>
    	<!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md text-center">
    					<h2>Toilet Users</h2>
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
					<th scope="col" center>Id</th>
					<th scope="col">User name</th>
					<th scope="col">User email</th>
					<th scope="col">Toilet used</th>
					<th scope="col">Approve this usage</th>
					{{-- <th scope="col">View</th> --}}
					<th scope="col">Manage</th>
					
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
						<td>
							<form action="" method="POST">
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
							<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
							
							</form>
						</td>
						
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>a@b.c</td>
						<td>XYZ toilet</td>
						<td>Yes | No</td>
						{{-- <td>views</td> --}}
						<td>
							<form action="" method="POST">
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
							<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
							
							</form>
						</td>
						
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>a@b.c</td>
						<td>XYZ toilet</td>
						<td>Yes | No</td>
						{{-- <td>views</td> --}}
						<td>
							<form action="" method="POST">
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
							<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
							
							</form>
						</td>
						
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>a@b.c</td>
						<td>XYZ toilet</td>
						<td>Yes | No</td>
						{{-- <td>views</td> --}}
						<td>
							<form action="" method="POST">
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
							<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
							
							</form>
						</td>
						
					</tr>
				</tbody>
			</table>
			</div>
			</div>	
	</div>
    </section>
@endsection