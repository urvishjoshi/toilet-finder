@section('title','Toiletousers')
@extends('admin.layouts.app')
@section('toiletuser.show')

<section>
	<!-- Content Header (Page header) -->
	<div class="content pt-4">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1 d-flex align-items-start flex-column" title="Active users">
					<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-3" style="font-size: 30px;text-decoration:none; "></a>
				</div>
				<div class="col-md text-center">
					<h2>Toilet Usages of <b>{{ $name }}</b></h2>
				</div><!-- /.col -->
				<div class="col-md-1">

				</div>
			</div><!-- /.row -->
			<HR width=40%>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="container justify-content-center" id="requestTable">
				<div class="card">
					<div class="card-header border-0 p-0">
						<div class="container justify-content-center p-0" id="requestTable">
							<table class="table align-items-center table-hover table-flush text-center mb-0">
								<thead>
									<tr class="thead-light">
										<th scope="col">Transact Id</th>
										<th scope="col">Owner Id</th>
										<th scope="col">User email</th>
										<th scope="col">Toilet used</th>
										<th scope="col">Used on</th>
									</tr>
								</thead>
								<tbody>
									@if( count($usages) == 0 )
									<tr><td colspan="6"><center><h2>No Usages</h2></center></td></tr>
									@else
									@foreach($usages as $usage)
									<tr>
										<th>{{ $usage['transaction_id'] }}</th>
										<td>{{ $usage->owner['id'] }}</td>
										<td>{{ $usage->user['email'] }}</td>
										<td>{{ $usage->toilet['toilet_name'] }}</td>
										<td>{{ $usage['created_at']->format('d/m/Y').' at '.$usage['created_at']->format('g:i A') }}</td>
								{{-- <td>
								<form action="{{ route('a.toiletusers.destroy',$usage) }}" method="POST">
								@method('DELETE') @csrf
									
									<button class="btn btn-danger" name="name" type="submit" value="{{ $usage->user['id'] }}">Delete</button>

								</form>
							</td> --}}
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