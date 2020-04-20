@section('title','Toiletowner')
@extends('admin.layouts.app')
@section('toiletowner')


	<section>
		<div class="content-header bg-danger">
    		<div class="container-fluid ">
    			<div class="row ">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Toilet Owner Infomation</h1>
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
							<th>E-mail</th>
							<th>Toilet Address</th>
							<th>Contact</th>
							<th>Rattings</th>
							<th>Usage</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					    <tr>
					      <th scope="row">2</th>
					      <td>abc@gmail.com</td>
					      <td>Ghare</td>
					      <td>1234567890</td>
					      <td>Rat</td>
					      <td>Usage display</td>
					      <td><i class='fas fa-edit'></i><i class='fas fa-eye'style="padding-left: 10px;"></i></td>
					    </tr>
					     <tr>
					      <th scope="row">3</th>
					      <td>abc@gmail.com</td>
					      <td>Ghare</td>
					      <td>1234567890</td>
					      <td>1234567890</td>
					      <td>Usage will display</td>
					      <td><i class='fas fa-edit'></i><i class='fas fa-eye'style="padding-left: 10px;"></i></td>
					    </tr>
					     <tr>
					      <th scope="row">1</th>
					      <td>abc@gmail.com</td>
					      <td>Ghare</td>
					      <td>1234567890</td>
					      <td>1234567890</td>
					      <td>Usage will display</td>
					      <td><i class='fas fa-edit'></i><i class='fas fa-eye'style="padding-left: 10px;"></i></td>
					    </tr>
				</table>
			</div>	
		</div>
	</section>
@endsection