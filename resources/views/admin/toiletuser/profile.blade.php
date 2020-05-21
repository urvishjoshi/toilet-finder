@section('title','Edit User')
@extends('admin.layouts.app')
@section('toiletuser.profile')

	<section>
		<div class="content-header">
	<div class="container-fluid pt-2">
		<div class="col-xl-auto order-xl-1">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0">Personal Details</h3>
						</div>
					</div>
				</div>
				<div class="card-body">
					<h6 class="heading-small text-muted mb-4">User information</h6>
					<div class="pl-lg-4">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="name">Your name</label>
										<input type="text" id="ownername" name="ownername" class="form-control" placeholder="Name" value=""><!-- Owner Name -->
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label class="form-control-label" for="email">Email address</label>
										<input type="email" id="email" name="email" class="form-control" placeholder="Email" value=""><!-- Owner Email -->
									</div>
								</div>
							</div>
						</div>
						<hr class="my-2" />
						<!-- Address -->
						<h6 class="heading-small text-muted mb-4">Contact information</h6>
						<div class="pl-lg-4">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label class="form-control-label" for="contactno">Contact no</label>
										<input type="text" id="contactno" name="contactno" class="form-control" placeholder="Contact" value=""><!-- Owner Contact No. -->
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-control-label" for="address">Address</label>
										<input id="address" class="form-control" name="address"  placeholder="Home Address" value="" type="text"><!-- Owner Address -->
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="city">City</label>
										<input type="text" id="city" name="city" class="form-control" placeholder="City"  value=""><!-- Owner city -->
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="country">Country</label>
										<input type="text" id="country" name="country" class="form-control" placeholder="Country" value=""><!-- Owner countary -->
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-control-label" for="postal-code">Postal code</label>
										<input type="number" id="postalcode" name="postalcode" class="form-control" placeholder="6 digit code"><!-- Owner Postal code -->
									</div>
								</div>
							</div>
						<button type="submit" id="submitbtn" name="submitbtn" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>

	</section>
@endsection
