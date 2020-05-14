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
	    	'active' => ToiletInfo::where('owner_id','=',Auth::user()->id)->where('status','1')->count(),
	    	'toilets' => ToiletInfo::where('owner_id','=',Auth::user()->id)->count(),
	    	'usages' => ToiletUsageInfo::where('owner_id','=',Auth::user()->id)->count(),
    	];
        $autoalloc = ToiletOwner::select('auto_allocate')->where('id','=',Auth::user()->id)->get();
    	
    	return view('toiletowner.home',compact('data','autoalloc'));
    }

    public function store(Request $request)
    {
        $owner = ToiletOwner::find(Auth::user()->id);
        $status = $request->input('autoalloc');
        if ($status=='0') {
            $owner->auto_allocate = '1';
            $owner->save();
            return response()->json(['status'=>'1']);
        }
        else {
            $owner->auto_allocate = '0';
            $owner->save();
            return response()->json(['status'=>'0']);
        }
    }

    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
