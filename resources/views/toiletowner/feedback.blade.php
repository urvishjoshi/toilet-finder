@section('title','Feedback')
@extends('toiletowner.layouts.app')

@section('feedback')
    <section>
		<!-- Content Header (Page header) -->
	<div class="content-header">
	<div class="container-fluid pt-2">
		<div class="col-xl-8 order-xl-1">
			<div class="card">
				<div class="card-header">
					<div class="row align-items-center">
						<div class="col-8">
							<h3 class="mb-0">Feedback to Admin</h3>
						</div>
					</div>
				</div>
				<div class="card-body">
					<form>
						<div class="lg-4">
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-control-label" for="fdbksubject">Feedback subject</label>
										<input type="text" id="fdbksubject" class="form-control" placeholder="Subject" value="">
									</div>
									<div class="form-group">
										<label class="form-control-label" for="fdbkdesc">Describe your suggestion</label>
										<textarea id="fdbkdesc" class="form-control" rows="9"></textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" id="fdbksend" name="fdbksend" class="btn btn-primary">Send Feedback</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
    </section>
@endsection
