@section('title','Requests')
@extends('admin.layouts.app')
@section('request')	

<div class="content-wrapper">
	<section>
		<div class="container pt-5">
			
			<div class="row row-fluid">
				<div class="col-md-2">
					<a class="badge badge-pill badge-success font-14" href="" style="">
						
					<a href="usersInfo.php?status=1" class="fas fa-user-check" style="font-size: 34px;color: black;text-decoration:none; "></a>
					
				</div>

				<div class="col-md-7" title="text-center">
					<h2>Pending approval requests</h2>
					<hr style="color: red;">
				</div>
				<div title="Denied users">
					<a class="badge badge-pill badge-warning font-14" href="" style="float:right;margin: 0px -5px -10px 0px;padding: 2.6px 5px!important;z-index: 1;">
						
					</a>
					<a href="#" class="fas fa-user-times" style="font-size: 36px;color: black;text-decoration:none; "></a>
				</div>
			</div>

			<div class="row-fluid pt-1">
				<div class="col-md-10 mt-4">

				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		
	</section>

</div>
@endsection