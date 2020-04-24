<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletOwner;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'allRequests'=> ToiletOwner::where('status','=','0')->get(),
            'allActives'=> ToiletOwner::where('status','=','1')->get(),
            'allDeactives'=> ToiletOwner::where('status','=','-1')->get()
        ];
        $data = (object) $data;     //convert array into obj 
        return view('admin.request',compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

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
