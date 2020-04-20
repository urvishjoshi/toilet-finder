@section('title','Toiletousers')
@extends('admin.layouts.app')
@section('toiletuser')

<section>
		<div class="content-header bg-danger">
    		<div class="container-fluid ">
    			<div class="row ">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Toilet user</h1>
    				</div>

    			</div>
    		</div>
    	</div>

    	<div class="container">
			<div class="row p-3">
				<table class="table  table-hover">
  					<thead class="alert alert-info">
  						<tr>
							<th>Id</th>
							<th>Name</th>
							<th>E-mail</th>
							<th>Usage</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <th scope="row">1</th>
					      <td>Kishan</td>
					      <td>abc@gmail.com</td>
					      <td>Display by back end</td>
					      <td><i class="material-icons">delete</i></td>
					    </tr>
					    <tr>
						  <th scope="row">1</th>
					      <td>Kishan</td>
					      <td>abc@gmail.com</td>
					      <td>Display by back end</td>
					      <td><i class="material-icons">delete</i></td>
					    </tr>
					    <tr>
						  <th scope="row">1</th>
					      <td>Kishan</td>
					      <td>abc@gmail.com</td>
					      <td>Display by back end</td>
					      <td><i class="material-icons">delete</i></td>
					    </tr>
				 	</tbody>
			</table>
		</div>
	</div>
</section>
@endsection