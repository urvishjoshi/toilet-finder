<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
    	return view('admin.search');
    }
    function action(Request $request)
    {
    	if($request->ajax())
    	{
    		$query = $request -> ('query');
    		if($query != '')
    		{
    			$data = DB::('toilet_owners')
    			->where('name','like','%'.$query.'%')
    			->orwhere('email','like','%'.$query.'%')
    			->get();
    		}
    		else
    		{
    			$data = DB::table('toilet_owners')
    				->orderBy('id','desc')
    				->get();
    		}
    		$total_row = $data->count()
    		{
    			if(total_row > 0)
    			{
    				foreach ($data as $row) 
    				{
    				
    				
	    				$output .= '
						<tr>
							<td>'.$row->name.'</td>
						    <td>'.$row->email.'</td>
						    <td>'.$row->mobileno.'</td>
						    <td>'.$row->colplex_name.'</td>
						    <td>'.$row->email.'</td>

						</tr>
	    				';
    				}

    			}
    			else
    			{
    				$output = '
    				<tr>
						<td align="center" colspan="4"> NO data found</td>

    				</tr>';
    			}
    		}
    	}
    }
}
