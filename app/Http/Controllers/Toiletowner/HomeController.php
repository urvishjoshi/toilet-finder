<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use App\Model\ToiletUsageInfo;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$data = [
	    	'active' => ToiletInfo::where('owner_id','=',Auth::user()->id)->where('status','=',1)->count(),
	    	'toilets' => ToiletInfo::where('owner_id','=',Auth::user()->id)->count(),
	    	'usages' => ToiletUsageInfo::where('owner_id','=',Auth::user()->id)->count(),

    	];
    	
    	return view('toiletowner.home',compact('data'));
    }
    public function autoalloc()
    {
        $owner = ToiletOwner::find(Auth::user()->id);
        $status = request()->input('autoalloc');
        if ($status==0) {
            $owner->auto_allocate = 1;
        }
        else
            $owner->auto_allocate = 0;
    }
}
