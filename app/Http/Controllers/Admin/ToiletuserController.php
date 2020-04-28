<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletUsageInfo;
use App\User;
use Illuminate\Http\Request;

class ToiletuserController extends Controller
{
    private $url = 'admin.toiletuser.';

    public function index()
    {
        $users = User::with('toiletusages')->get();
        return view($this->url.'index',compact('users'));
    }

    public function show($id)
    {
        $name = request()->input('name');
        $usages = ToiletUsageInfo::where('user_id','=',$id)->with('user')
                ->with('owner')->get();

        return view($this->url.'show',compact('usages','name'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return back();
    }
}
