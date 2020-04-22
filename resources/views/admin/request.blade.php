@section('title','Requests')
@extends('admin.layouts.app')
@section('request')	
<section>

	<div class="container pt-4">
		<div class="container col-md-auto">
		<div class="row">
			<div class="col-md-auto d-flex align-items-end flex-column ml-3" title="Active users">
				<a class="badge badge-pill badge-success font-14" href="{{ url('admin/toiletownersinfo') }}" style="float:right;margin: 0px -5px -10px 0px;padding: 2.6px 5px!important;z-index: 1;">
					5
				</a>
				<a href="{{ url('admin/toiletownersinfo') }}" class="fas fa-user-check" style="font-size: 34px;color: black;text-decoration:none; "></a>
			</div>
			<div class="col-md text-center">
				<h2>Toilet owner pending requests</h2>
			</div>
			<div class="col-md-auto d-flex align-items-end flex-column mr-3" title="Denied users">
				<a class="badge badge-pill badge-warning font-14" href="{{ url('admin/toiletownersinfo') }}" style="float:right;margin: 0px -5px -10px 0px;padding: 2.6px 5px!important;z-index: 1;">
					3
				</a>
				<a href="{{ url('admin/toiletownersinfo') }}" class="fas fa-user-times" style="font-size: 36px;color: black;text-decoration:none; "></a>
			</div>
		</div>

		<HR width=50%>
			<div class="container justify-content-center pt-3" id="requestTable">
				<table class="table table-hover">
				    <thead>
				    <tr class="thead-light">
				      <th scope="col" center>Id</th>
				      <th scope="col">Toilet owner</th>
				      <th scope="col">Email</th>
				      <th scope="col">Contact</th>
				      <th scope="col">Registered on</th>
				      <th scope="col">Actions</th>
				    </tr>
				    </thead>
				    <tbody>
					{{-- <tr><td colspan="5"><center><h4>No records found</h4></center></td></tr> --}}
						    <tr>
								<th scope="row">3</th>
								<td>ABC owner</td>
								<td>a@b.c</td>
								<td>9999999999</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Approve</button> &nbsp;&nbsp;
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-danger" name="denyBtn" type="submit" value="">Deny</button>
								</form>
								</td>
						    </tr>
						    <tr>
								<th scope="row">3</th>
								<td>ABC owner</td>
								<td>a@b.c</td>
								<td>9999999999</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Approve</button> &nbsp;&nbsp;
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-danger" name="denyBtn" type="submit" value="">Deny</button>
								</form>
								</td>
						    </tr>
						    <tr>
								<th scope="row">3</th>
								<td>ABC owner</td>
								<td>a@b.c</td>
								<td>9999999999</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Approve</button> &nbsp;&nbsp;
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-danger" name="denyBtn" type="submit" value="">Deny</button>
								</form>
								</td>
						    </tr>
						    <tr>
								<th scope="row">3</th>
								<td>ABC owner</td>
								<td>a@b.c</td>
								<td>9999999999</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Approve</button> &nbsp;&nbsp;
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-danger" name="denyBtn" type="submit" value="">Deny</button>
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