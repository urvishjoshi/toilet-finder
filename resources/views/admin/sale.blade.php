@section('title','Sales')
@extends('admin.layouts.app')
@section('sale')

<section>
		<div class="content-header bg-danger">
    		<div class="container-fluid ">
    			<div class="row ">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Toilet Sales</h1>
    				</div>

    			</div>
    		</div>
    	</div>

<div class="container">
			<div class="row p-3">
				<table class="table  table-hover table-bordered">
  					<thead class="alert alert-info">
  						<tr>
							 <th>Id</th>
							 <th>Toilet-User</th>
							 <th>Toilet Used</th>
							 <th>Used at</th>
						</tr>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th>Date/Time</th>
						</tr>
					</thead>
					<tbody>
					    <tr>
					      <th scope="row">2</th>
					      <td>abc@gmail.com</td>
					      <td>Ghare</td>
					      <td>1234567890</td>
					     
					    </tr>
					     <tr>
					      <th scope="row">3</th>
					      <td>abc@gmail.com</td>
					      <td>Ghare</td>
					      <td>1234567890</td>
					      
					    </tr>
					     <tr>
					      <th scope="row">1</th>
					      <td>abc@gmail.com</td>
					      <td>Ghare</td>
					      <td>1234567890</td>
					      
					    </tr>
				</table>
			</div>	
		</div>
</section>
@endsection