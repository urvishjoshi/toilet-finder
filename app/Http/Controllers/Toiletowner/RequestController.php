<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use App\Model\ToiletUsageInfo;
use Illuminate\Http\Request;
use Auth;

class RequestController extends Controller
{
    private $url = 'toiletowner.request';
    public function index()
    {
        $allRequests = ToiletUsageInfo::where('status','=','0')->where('owner_id',Auth::user()->id)->with('user')->with('owner')->with('toilet')->get();
        return view($this->url,compact('allRequests'));
    }

    public function update(Request $request, $id)
    {
        $edit = ToiletUsageInfo::find($id);
        if($request->btn=='1'){
            $edit->status = '1';
            //transaction process
            $msg = 'approved';
            $edit->save();
        }
        if($request->btn=='-1'){
            $msg = 'denied';
            $edit->delete();
        }
        return back()->with('toast.o','Request '.$msg);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        // $status = $id;
        // $owners = ToiletUsageInfo::where('status','=',$id)->get();

        // return view($this->url.'show',compact('owners','status'));
    }

    public function edit($id)
    {
        //
    }


    public function destroy($id)
    {
        // $delete = ToiletUsageInfo::find($id);
        // $delete->delete();
        // return back();
    }
}
