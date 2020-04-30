@section('title','Feedbacks')
@extends('admin.layouts.app')
@section('feedback')

<section>
    <!-- Content Header (Page header) -->
    	<div class="content pt-4">
    		<div class="container-fluid">
    			<div class="row">
					<div class="col-md text-center">
    					<h2>Feedbacks</h2>
    				</div><!-- /.col -->
    			</div><!-- /.row -->
				<HR width=30%>

    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->
		<div class="content-header">
		<div class="container-fluid">
		<div class="container justify-content-center" id="requestTable">
			<table class="table table-hover">
				<thead>
				<tr class="thead-light">
					<th scope="col">Id</th>
					<th scope="col">Feedbacker id</th>
					<th scope="col">Feedbacker</th>
					<th scope="col">Subject</th>
					<th scope="col">Description</th>
					<th scope="col">Received on</th>
				</tr>
				</thead>
				<tbody>
					@if( count($feedbacks) == 0 )
						<tr><td colspan="6"><center><h2>No feedbacks</h2><hr></center></td></tr>
					@else
						@foreach($feedbacks as $feedback)
						    <tr>
								<th scope="row">{{ $feedback->id }}</th>
								<td>{{ $feedback->feedbacker_id }}</td>
								<td>{{ $feedback->feedbacker_type=='1' ? 'Owner' : 'User' }}</td>
								<td>{{ $feedback->subject }}</td>
								<td>{{ $feedback->desc }}</td>
								<td>{{ $feedback->created_at->format('d/m/Y').' at '.$feedback->created_at->format('g:i A') }}</td>
						    </tr>
						@endforeach
					@endif
				</tbody>
			</table>
			</div>
			</div>	
	</div>

</section>
@endsection