@section('title','Ratings')
@extends('admin.layouts.app')
@section('rating')


<section>
		<div class="content-header bg-danger">
    		<div class="container-fluid ">
    			<div class="row ">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Toilet rattings</h1>
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
							<th>Toilet owner's E-mail</th>
							<th>Toilet Owner's Name</th>
							<th>Rattings</th>
							<th>Something</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						  <th scope="row">1</th>
					      <td>abc@gmail.com</td>
					      <td>Kishan</td>
					      <td>Display by back end</td>
					      <td>Something</td>
					    </tr>
					    <tr>
						  <th scope="row">1</th>
					      <td>abc@gmail.com</td>
					      <td>Kishan</td>
					      <td>Display by back end</td>
					      <td>Something</td>
					    </tr>
					    <tr>
						  <th scope="row">1</th>
					      <td>abc@gmail.com</td>
					      <td>Kishan</td>
					      <td>Display by back end</td>
					      <td>Something</td>
					    </tr>
					</tbody>
				</table>
			</div>
		</div>
</section>
@endsection