@section('title','Ratings')
@extends('admin.layouts.app')
@section('rating.show')

<section>
	<div class="container pt-4 px-3">
		<div class="row">
			<div class="col-md-1 d-flex align-items-start flex-column">
				<a href="{{ url()->previous() }}" class="fas fa-arrow-left pt-3 pl-2" style="font-size: 30px;text-decoration:none; "></a>
			</div>
			<div class="col-md text-center">
				<h2>Toilet Ratings of <b>{{$name}}</b></h2>
			</div><!-- /.col -->
			<div class="col-md-1"></div>
		</div>
		<HR width=60%>

	</div><!-- /.container-fluid -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="container justify-content-center" id="requestTable">
				<div class="card">
					<div class="card-header border-0 p-0">
						<div class="container justify-content-center p-0" id="requestTable">
							<table class="table align-items-center table-hover table-flush text-center mb-0">
								<thead>
									<tr class="thead-light">
										<th>Id</th>
										<th width="10%">Toilet name</th>
										<th width="8%">Owner Id</th>
										<th width="8%">User Id</th>
										<th width="20%">Rating</th>
										<th>Description</th>
										<th>Visible</th>
									</tr>
								</thead>
								<tbody>
									@if( count($ratings) == 0 )
									<tr><td colspan="6"><center><h2>No Ratings done yet</h2><hr></center></td></tr>
									@else
									@foreach($ratings as $rating)
									@for($i=0;$i<count($rating->ratings);$i++)
									<tr>

										<th scope="row">{{$rating->ratings[$i]['id']}}</th>
										<td>{{ $rating['toilet_name'] }}</td>
										<td>
											{{ $rating['owner_id'] }}
										</td>
										<td>{{ $rating->ratings[$i]['user_id'] }}</td>
										<td title="{{ $rating->ratings[$i]['rating'] }}">
											@for ($j = 0; $j < 5; ++$j)
											<i class="font-20 fa fa-star{{ ($rating->ratings[$i]['rating'])<=$j?'-o':'' }}" aria-hidden="true"></i>
											@endfor
										</td>
										<td>{{ $rating->ratings[$i]['desc'] }}</td>
										<td class="" for="{{$rating->ratings[$i]['id']}}">
											<div class="custom-control custom-switch" for="{{$rating->ratings[$i]['id']}}">
												<input type="checkbox" class="custom-control-input" name="{{$rating->ratings[$i]['id']}}" id="{{$rating->ratings[$i]['id']}}" value="{{$rating->ratings[$i]['visible']=='0' ? '0' : '1'}}" {{$rating->ratings[$i]['visible']=='1' ? 'checked' : ''}}>
												@method('POST') @csrf
											      
												<label class="custom-control-label" for="{{$rating->ratings[$i]['id']}}" style="font-size: 18px;"></label>
											</div>
										</td>
									</tr>
									@endfor
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
</div>
<!-- /.content-header -->
</section>
<script>

$(document).ready(function() {
    $('.custom-control-input').change(function() {
        console.log($(this).val())
        $.ajax({
            url: '{{ route('a.ratings.store') }}',
            data: {
                   'visible': $(this).val(),
                   'id': $(this).attr('id'),
                    '_token': $('input[name=_token]').val(),
                    '_method': $('input[name=_method]').val(),
                  },
            type: 'POST',
            dataType: 'json',
            success: function (response) {

                $(this).val(response.visible);

            }
        });
    });
});
</script>
@endsection