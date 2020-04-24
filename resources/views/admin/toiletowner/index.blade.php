@section('title','Toiletowner')
@extends('admin.layouts.app')
@section('toiletowner.index')
<section>

	<div class="container pt-4">
		<div class="container col-md-auto">
		<div class="row">
			<div class="col-md text-center">
				<h2>Toilet owners</h2>
			</div>
		</div>
		<hr width=25%>
		{{-- <div class="panel panel-default">
			<div class="panel-heading">Search the Data</div>
			<div class="panel-body">
				<input type="text" name="search" id="search" class="form-control" placeholder="Enter name">
			</div>
		</div> --}}

			<div class="container justify-content-center pt-3" id="requestTable">
				<table class="table table-hover">
				    <thead>
				    <tr class="thead-light">
				      <th scope="col" center>Id</th>
				      <th scope="col">Email</th>
				      <th scope="col">Toilets owned</th>
				      {{-- <th scope="col">Toilets usages</th> --}}
				      <th scope="col">Registered on</th>
				      <th scope="col">View Toilet</th>
				    </tr>
				    </thead>
				    <tbody>
					@if( count($activeOwners) == 0 )
						<tr><td colspan="6"><center><h2>No Record found</h2><hr></center></td></tr>
					@else
						@foreach($activeOwners as $owner)
						    <tr>
								<th scope="row">{{ $owner->id }}</th>
								<td>{{ $owner->email }}</td>
								<td>{{ count($owner->toilets) }}</td>
								{{-- <td>{{ count($owner->toiletusages) }}</td> --}}
								<td>{{ $owner->created_at }}</td>
								<td>
								<form action="{{ route('a.toiletowners.show',$owner->id) }}" method="POST">
								@method('GET') @csrf
									
									<button class="btn btn-primary" name="name" type="submit" value="{{ $owner->name }}">View</button>

								</form>
								</td>
						    </tr>
						@endforeach
					@endif
				    </tbody>
				</table>
			</div>

		</div>
	</div>

</section>

<script>
	$(document).ready(function()
	{
		function fetch_customer_data(query = '')
		{
			$.ajax({
				url:"return view('admin')",
				method:GET,
				data:{query,query},
				dataType:'Json'
				sucess:function(data)
				{
					$('tbody').html(data.table_data);
					$('#text_records').text(data.total_data)
				}
			})
		}
	});
</script>
@endsection