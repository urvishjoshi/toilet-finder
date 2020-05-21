@section('title','Settings')
@extends('admin.layouts.app')
@section('setting')
<section>
	<div class="container pt-3">
		<div class="container col-auto pb-0">
			<div class="row pb-0">
				<div class="col-md pb-0 text-center">
					<h2 class=" mb-0">Settings</h2>
				</div>
			</div>
			<HR width=40%>
		</div>
	</div>
	<div class="content-header mt-0 pt-1">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-11">
					<form action="{{ route('a.settings.update',1) }}" method="post" class="row justify-content-center">
						@method('PUT') @csrf
						<div class="col-md-6 d-flex">
							<label for="mapkey">Map Api Key</label>
							<input class="form-control w-100" type="text" name="mapkey" value="{{ $admin->mapkey=='' ? '' : $admin->mapkey }}">
						</div>
						<div class="col-md-auto">
							<button class="btn btn-primary" value="1" name="mapkeybtn" type="submit">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
