<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletOwner;
use Illuminate\Http\Request;

class ToiletownerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = request()->input('status');
        $owners = ToiletOwner::where('status','=',$status)->get();

        return view('admin.toiletownersinfo',compact('owners','status'));
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
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        if($request->btn=='1'){
            $edit = ToiletOwner::find($id);
            $edit->status = '1';
            $edit->save();
        }
        if($request->btn=='-1'){
            $edit = ToiletOwner::find($id);
            $edit->status = '-1';
            $edit->save();
        }
        return back();
    }

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
