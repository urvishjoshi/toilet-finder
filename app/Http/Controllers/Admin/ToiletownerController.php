<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Validator;

class ToiletownerController extends Controller
{
    private $url = 'admin.toiletowner.';    //for route path prefix

    public function index()
    {
        $activeOwners = ToiletOwner::where('status','=','1')
                        ->with('toilets')->with('toiletusages')->get();
        // $activeToilets = ToiletInfo::with('owner')->where('status','=','1')->get();

        return view($this->url.'index',compact('activeOwners'));
    }

    public function show($id)
    {
        $name = request()->input('name');
        $info = ToiletOwner::where('id',$id)->get();
        $autoalloc = ToiletOwner::select('auto_allocate')->where('id',$id)->get();

        return view($this->url.'show',compact('info','name','autoalloc'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $owner = ToiletOwner::find($request->input('id'));
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

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'email'   => 'required|email',
            'password' => 'required|min:6|confirmed',
            'contactno'   => 'required|numeric|min:10',
        ],
        [
            'email.exists' => 'Email doesn'."'".'t exist!',
            'email.required' => 'Please enter an Email!',
            'password.required' => 'Please enter a Password!',
            'contactno.required' => 'Please enter a mobile number!',
        ] );

        if($validate->fails())
        {
            return back()->withInput($request->except('password'))->withErrors($validate);
        }

        $owner = ToiletOwner::findOrFail($id);
        // return $request;
        $owner->name = $request->ownername;
        $owner->email = $request->email;
        $owner->password = Hash::make($request->password);
        $owner->mobileno = $request->contactno;
        $owner->save();
        return back()->with('a.toast','ToiletOwner with ID-'.$owner->id.' updated manually!');
        // return redirect()->route('a.toiletowners.show',[$owner->id,'name'=>$request->ownername])->with('a.toast','ToiletOwner with ID-'.$owner->id.' updated manually!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = ToiletOwner::findOrFail($id);
        $msg = 'Toilet owner '.$delete->email.' has been successfully deleted';
        $delete->delete();
        return back()->with('a.toast',$msg);
    }
}
