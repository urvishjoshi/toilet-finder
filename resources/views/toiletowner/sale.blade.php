@section('title','Sales')
@extends('toiletowner.layouts.app')

@section('sale')
    <section>
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md text-center">
    					<h2>Your Sales</h2>
    				</div><!-- /.col -->
    			</div>
    			 <HR width=50%>

    			<div class="row">
    				<div class="col ">
					<!-- Default checked -->
						<div class="custom-control custom-switch">
							<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
							<label class="custom-control-label" style="font-size: 25px;" for="customSwitch1">Auto allocate toilets</label>
						</div>
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
