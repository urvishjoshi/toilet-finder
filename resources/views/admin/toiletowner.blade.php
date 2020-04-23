@section('title','Toiletowner')
@extends('admin.layouts.app')
@section('toiletowner')
<section>

	<div class="container pt-4">
		<div class="container col-md-auto">
		<div class="row">
			<div class="col-md pl-3">
				<h2>Toilet owners</h2>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">Search the Data</div>
			<div class="panel-body">
				<input type="text" name="search" id="search" class="form-control" placeholder="Enter name">
			</div>
		</div>


			<div class="container justify-content-center pt-3" id="requestTable">
				<table class="table table-hover">
				    <thead>
				    <tr class="thead-light">
				      <th scope="col" center>Id</th>
				      <th scope="col">Toilet owner</th>
				      <th scope="col">Toilets owned</th>
				      <th scope="col">Toilets active</th>
				      <th scope="col">Registered on</th>
				      <th scope="col">Actions</th>
				    </tr>
				    </thead>
				    <tbody>
					{{-- <tr><td colspan="5"><center><h4>No records found</h4></center></td></tr> --}}
						    <tr>
								<th scope="row">3</th>
								<td>ABC owner</td>
								<td>3</td>
								<td>1</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
								</form>
								</td>
						    </tr>
						    <tr>
								<th scope="row">3</th>
								<td>urvish owner</td>
								<td>3</td>
								<td>1</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
								</form>
								</td>
						    </tr>
						    <tr>
								<th scope="row">3</th>
								<td>kishan owner</td>
								<td>3</td>
								<td>1</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
								</form>
								</td>
						    </tr>
						    <tr>
								<th scope="row">3</th>
								<td>tit-tit owner</td>
								<td>3</td>
								<td>1</td>
								<td>04-05-2020</td>
								<td>
								<form action="" method="POST">
									<button class="btn btn-primary" name="approveBtn" type="submit" value="">View</button> &nbsp;&nbsp;
									<button class="btn btn-success" name="approveBtn" type="submit" value="">Manage</button> &nbsp;&nbsp;
									
								</form>
								</td>
						    </tr>
					  		
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