@section('title','Toilets')
@extends('admin.layouts.app')
@section('toiletowner.show')
<section>

	<div class="container pt-4">
		<div class="container col-md-auto">
		<div class="row">
			<div class="col-md-1 d-flex align-items-start flex-column" title="Active users">
					<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
			</div>
			<div class="col-md text-center">
				<h2>Profile of <b>{{ $name }}</b></h2>
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
				        <th scope="col">Toilet name</th>
				        <th scope="col">Complex name</th>
				        <th scope="col">Address</th>
				        <th scope="col">Status</th>
				        <th scope="col">Created on</th>
				        <th scope="col">Price</th>
				    </tr>
				    </thead>
				    <tbody>
					@if( count($toilets) == 0 )
						<tr><td colspan="7"><center><h2>No Record found</h2><hr></center></td></tr>
					@else
						@foreach($toilets as $toilet)
						    <tr>
								<th scope="row">{{ $toilet->id }}</th>
								<td>{{ $toilet->toilet_name }}</td>
								<td>{{ $toilet->complex_name }}</td>
								<td>{{ $toilet->address }}</td>
								<td>
									{{ $toilet->status=='1' ? 'Active' : 'Not active'}}
								</td>
								{{-- <td>{{ count($toilet->toiletusages) }}</td> --}}
								<td>{{ $toilet->created_at }}</td>
								<td><b>${{ $toilet->price }}</b></td>
								{{-- <form action="{{ route('a.toiletowners.show',$toilet->id) }}" method="POST">
								@method('GET') @csrf
									<button class="btn btn-primary" name="btn" type="submit" value="0">View</button>
								</form> --}}
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