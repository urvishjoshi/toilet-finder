@section('title','Reports')
@extends('admin.layouts.app')
@section('report')
<section>
	<div class="container pt-4">
		<div class="container col-auto">
			<div class="row">
				<div class="col-md text-center">
					<h2>Toilet Reports</h2>
				</div>
			</div>
			<HR width=50%>
		</div>
	</div>
	<div class="content-header">
		<div class="container-fluid">
				<div>
					<form action="{{ route('a.reports.show',1) }}" method="post" id="form" class="row justify-content-center">
					@method('GET') @csrf
					<div class="col-md-auto" id="monthDiv">
						<select class="custom-select" id="selectRange" name="selectRange">
							<option disabled>Select range</option>
							<option value="7">7 days</option>
							<option value="31">30 days</option>
							<option value="6">6 months</option>
							<option value="12">1 year</option>
						</select>
					</div>
					<div class="col-md-auto">
						<button class="btn btn-primary" value="getRecord" name="getRecord" type="submit">Get Record</button>
					</div>
					</form>
				</div>
			</div>
		</div>
</section>
@endsection
