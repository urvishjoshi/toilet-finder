@section('title','Toilet')
@extends('toiletowner.layouts.app')

@section('toilet')
	<section>

	<div class="content-header pb-0 pt-3">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0" class="tooltip-test" title="Tooltip">Your Toilets</h3>
						</div>
						<div class="col-4 text-right">
						  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewToilet">
						  	  Add new Toilet
						  	</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="content-header pt-0">
		<div class="container-fluid">
		<div class="container justify-content-center pt-3" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th scope="col" center>Id</th>
					<th scope="col">Toilet name</th>
					<th scope="col">Complex</th>
					<th scope="col">Address</th>
					<th scope="col">Status</th>
					<th scope="col">Created on</th>
					<th scope="col">Action</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">11</th>
						<td>ABCDEF</td>
						<td>ABCDEF complex</td>
						<td>ABC,DEF,QWEERT</td>
						<td>Active</td>
						<td>27-05-2020</td>
						<td>Edit | Delete</td>
					</tr><tr>
						<th scope="row">11</th>
						<td>ABCDEF</td>
						<td>ABCDEF complex</td>
						<td>ABC,DEF,QWEERT</td>
						<td>Active</td>
						<td>27-05-2020</td>
						<td>Edit | Delete</td>
					</tr><tr>
						<th scope="row">11</th>
						<td>ABCDEF</td>
						<td>ABCDEF complex</td>
						<td>ABC,DEF,QWEERT</td>
						<td>Active</td>
						<td>27-05-2020</td>
						<td>Edit | Delete</td>
					</tr>
				</tbody>
			</table>
			</div>
			</div>	
	</div>

	</section>

	<!-- Modal -->
	<div class="modal fade" id="addNewToilet" tabindex="-1" role="dialog" aria-labelledby="addNewToiletLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-light">
			<h5 class="modal-title">Create new Toilet</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
		    <form action="" method="post">
						<h6 class="heading-small text-muted mb-2">Toilet information</h6>
						<div class="lg-4">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="toiletname">Toilet name</label>
										<input type="text" id="toiletname" class="form-control" placeholder="Toilet name" value="" required>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="toiletstatus">Toilet status</label>
										<select class="custom-select" id="toiletstatus" name="toiletstatus">
											<option disabled>Status</option>
												<option value="1" class="text-success">Active</option>
												<option value="0" class="text-danger">Not active</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="lg-4">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label" for="toiletype">Toilet type</label>
										<select class="custom-select" id="toiletype" name="toiletype">
											<option disabled>toilet for</option>
											<option value="">Male & Female</option>
											<option value="0">Male only</option>
											<option value="0">Female only</option>
										</select>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-control-label" for="toiletaddress">Address</label>
										<input id="toiletaddress" name="toiletaddress" class="form-control" placeholder="Toilet Address" value="" type="text" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="city">City</label>
										<input type="text" id="city" class="form-control" placeholder="City" value="">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="country">Country</label>
										<input type="text" id="country" class="form-control" placeholder="Country" value="">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="postal-code">Postal code</label>
										<input type="number" id="postal-code" class="form-control" placeholder="6 digit code">
									</div>
								</div>
							</div>
						
						</div>
		  </div>
		  <div class="modal-footer bg-light">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" id="btn-personal" name="btn-personal" class="btn btn-primary">Update</button>
					</form>
		  </div>
		</div>
	  </div>
	</div>
@endsection

