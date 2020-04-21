@section('title','Requests')
@extends('admin.layouts.app')
@section('approveduser')	
<section>

	<div class="container mt-3">
		<div class="row">
			<div class="col-md-1 d-flex align-items-start flex-column" title="Active users">
				<a href="request.php" class="fas fa-arrow-left pt-3" style="font-size: 30px;text-decoration:none; "></a>
			</div>
			<div class="col-md text-center">
				<h2>Active Toiletowners</h2>
			</div>
			<div class="col-md-1"></div>
		</div>

		<HR width=20%>
			<div class="container justify-content-center pt-3" id="requestTable">
				<table class="table table-hover">
				    <thead>
				    <tr class="thead-light">
				      <th scope="col" center>Id</th>
				      <th scope="col">Username</th>
				      <th scope="col">Name</th>
				      <th scope="col" width="15%">Registered on</th>
				      <th scope="col" width="20%">Action</th>
				    </tr>
				    </thead>
				    <tbody>
					{{-- <tr><td colspan="5"><center><h4>No records found</h4></center></td></tr> --}}
					    <tr>
							<th scope="row"><?php echo $users['id']; ?></th>
							<td><?php echo $users['email']; ?></td>
							<td><?php echo $users['name']; ?></td>
							<td><?php echo date("d-m-Y", strtotime($users['created_at']) ); ?></td>
							<td>
								<form action="process/processUser.php" method="POST">
								<button class="btn btn-warning" name="denyBtn" type="submit" value="">Deactive</button>
								&nbsp;&nbsp;
								<button class="btn btn-danger" name="deleteBtn" type="submit" value="">Delete</button>
								</form>
							</td>
					    </tr>
				    </tbody>
				</table>
			</div>

	</div>

</section>
@endsection