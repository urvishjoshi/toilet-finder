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
        $usages = ToiletUsageInfo::where('user_id',$id)->with('user')->with('owner')->get();
        if($name = request()->input('view'))
            return view($this->url.'show',compact('usages','name'));

        $user = User::find($id);
        if($name = request()->input('edit'))
            return view($this->url.'edit',compact('user','name'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mobileno = $request->mobileno;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->save();
        return redirect()->route('a.toiletusers.show',[$user->id,'edit'=>$request->name])->with('a.toast',"User details updated manually!");
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $msg = 'User '.$delete->email.' has been successfully deleted';
        $delete->delete();
        return back()->with('a.toast',$msg);
    }
}
