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
						<form action="{{ route('feedbacks.store') }}" method="post">
							@method('POST') @csrf
							<div class="lg-4">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label class="form-control-label" for="subject">Feedback subject</label>
											<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" value="{{old('subject')}}">
											@error('subject')
											<span class="text-danger font-14" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
										<div class="form-group">
											<label class="form-control-label" for="description">Describe your suggestion</label>
											<textarea id="description" name="description" class="form-control" rows="9" value="{{old('description')}}"></textarea>
											@error('description')
											<span class="text-danger font-14" role="alert">
												<strong>{{ $message }}</strong>
											</span>
											@enderror
										</div>
									</div>
								</div>
							</div>
							<button type="submit" id="ownerfdbk" name="ownerfdbk" class="btn btn-primary">Send Feedback</button>
						</div>
					</form>
				</div>
			</div>
			@if( count($feedbacks) >= 1 )
			<hr>
			<div class="row pb-0 mb-0">
				<div class="col-md text-center">
					<h2 class="mb-0">Past feedback records</h2>
				</div><!-- /.col -->
			</div>
			<HR width=40% class="mt-2">
			<div class="card">
				<div class="card-header border-0 p-0">
					<div class="container justify-content-center p-0" id="requestTable">
						<table class="table align-items-center table-hover table-flush text-center mb-0">
							<thead>
								<tr class="thead-light">
									<th>Subject</th>
									<th>Description</th>
									<th>Sent on</th>
								</tr>
							</thead>
							<tbody>
								@foreach($feedbacks as $feedback)
								<tr>
									<td>{{ $feedback->subject }}</td>
									<td>{{ $feedback->desc }}</td>
									<td>{{ $feedback->created_at->format('d/m/Y').' at '.$feedback->created_at->format('g:i A') }}</td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection
