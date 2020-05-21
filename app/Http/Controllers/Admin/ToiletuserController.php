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

<<<<<<< HEAD
=======
        if($id=='profile')
            return view($this->url.'profile');

>>>>>>> 7b9e507... adf
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
        $msg = 'User '.$delete->email.' has been successfully deleted';
        $delete->delete();
<<<<<<< HEAD
        return back()->with('a.toast',$msg);
=======
        return back()->with('toast',$msg);
>>>>>>> 7b9e507... adf
    }
}
