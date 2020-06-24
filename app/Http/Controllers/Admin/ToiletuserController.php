<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletUsageInfo;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

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
        // $user = User::find(1);
        // $user->password = Hash::make('$request->password');
        // echo$user->save(); die();

        // return Hash::make($request->password);
        $validate = Validator::make($request->all(), [
            'name'   => 'required',
            'email'   => 'required|email|unique:users,email,'.$id,
            'mobileno'   => 'required|numeric|min:10|unique:users,mobileno,'.$id,
            'age'   => 'required|numeric',
        ],
        [
            'email.exists' => 'Email doesn'."'".'t exist!',
            'email.required' => 'Please enter an Email!',
            'password.required' => 'Please enter a Password!',
            'mobileno.required' => 'Please enter a mobile number!',
        ] );

        if($validate->fails())
        {
            return back()->withInput($request->except('password'))->withErrors($validate);
        }

        if(($request->password != $request->password_confirmation)){
            return back()->withInput($request->except('password'))->withErrors(["password"=>"Password doesn't match!"]);
            if ($request->password < 5) {
                return back()->withInput($request->except('password'))->withErrors(["password"=>"Password must be atleast 6 characters long."]);
            }
        }
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobileno = $request->mobileno;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->save();
        return redirect()->route('a.toiletusers.show',[$user->id,'edit'=>$request->name])->with('a.toast',"User details updated manually!");
    }

    public function create()
    {
        return view($this->url.'add');
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'   => 'required',
            'email'   => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'mobileno'   => 'required|numeric|min:10|unique:users,mobileno',
            'age'   => 'required|numeric',
        ],
        [
            'email.exists' => "Email doesn't exist!",
            'mobileno.unique' => "Mobile no. already exist!",
            'email.required' => 'Please enter an Email!',
            'password.required' => 'Please enter a Password!',
            'mobileno.required' => 'Please enter a mobile number!',
        ] );

        if($validate->fails())
        {
            return back()->withInput($request->except('password'))->withErrors($validate);
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobileno = $request->mobileno;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->save();
        return redirect()->route('a.toiletusers.index')->with('a.toast',"User ".$request->email." created manually!");
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
