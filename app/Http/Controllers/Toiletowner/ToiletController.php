<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Auth;
use Illuminate\Http\Request;
class ToiletController extends Controller
{
    private $url = 'toiletowner.toilet.';
    public function index()
    {
        $toilets = ToiletInfo::with('owner')->where('owner_id','=',Auth::user()->id)->orderBy('status','desc')->get();
        return view($this->url.'index',compact('toilets'));
    }

    public function show($id)
    {
        $toilet = ToiletInfo::where('id','=',$id)->where('owner_id','=',Auth::user()->id)->get();
        return view($this->url.'show',compact('toilet'));
    }

    public function store(Request $request)
    {
        // $new = new ToiletInfo;

    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $toilet = ToiletInfo::find($id);
        $toilet->toilet_name = $request->toiletname;
        $toilet->price = $request->toiletprice;
        $toilet->complex_name = $request->complexname;
        $toilet->address = $request->address;
        $toilet->toilet_lat = $request->newLat;
        $toilet->toilet_lng = $request->newLng;
        $toilet->type = $request->toilettype;
        $toilet->status = $request->toiletstatus;
        $toilet->save();
        return redirect(route('toilets.index'));
    }

    public function destroy($id)
    {
        $delete = ToiletInfo::find($id);
        $delete->delete();
        return back();
    }
}
