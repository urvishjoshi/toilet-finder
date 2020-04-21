@section('title','Sales')
@extends('toiletowner.layouts.app')

@section('sale')
    <section>
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Your Sales</h1>
    				</div><!-- /.col -->
    			    <!--Kishan changed  (Removed column for breadcrumb)-->
					<!-- Default checked -->
					<div class="custom-control custom-switch">
						<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
						<label class="custom-control-label" for="customSwitch1">Auto allocate toilets</label>
					</div>
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
					<th scope="col">Owner name</th>
					<th scope="col">User name</th>
					<th scope="col">Toilet used</th>
					<th scope="col">Used on</th>
					<th scope="col">Paid</th>
					<th scope="col">View</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>DEF</td>
						<td>XYZ toilet</td>
						<td>27-05-2020</td>
						<td>$5</td>
						<td>
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button>
						</td>
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>DEF</td>
						<td>XYZ toilet</td>
						<td>27-05-2020</td>
						<td>$5</td>
						<td>
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button>
						</td>
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>DEF</td>
						<td>XYZ toilet</td>
						<td>27-05-2020</td>
						<td>$5</td>
						<td>
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button>
						</td>
					</tr>
					<tr>
						<th scope="row">11</th>
						<td>ABC</td>
						<td>DEF</td>
						<td>XYZ toilet</td>
						<td>27-05-2020</td>
						<td>$5</td>
						<td>
							<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button>
						</td>
					</tr>
					
				</tbody>
			</table>
			</div>
			</div>	
	</div>
</section>
@endsection
