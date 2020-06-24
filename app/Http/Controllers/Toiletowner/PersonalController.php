<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use App\Model\ToiletOwner;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;

class PersonalController extends Controller
{
    public function index()
    {
        $info = ToiletOwner::where('id',Auth::user()->id)->get();
        return view('toiletowner.personal',compact('info'));
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(),[
            'ownername'   => 'required',
            'email'   => 'required|email|unique:toilet_owners,email,'.$id,
            'contactno'   => 'required|numeric|min:10|unique:toilet_owners,mobileno,'.$id,
        ],
        [
            'email.exists' => 'Email doesn'."'".'t exist!',
            'email.required' => 'Please enter an Email!',
            'mobileno.required' => 'Please enter a mobile number!',
        ] );
         
        if($validate->fails())
        {
            return back()->withErrors($validate);
        }

        if(($request->password != $request->password_confirmation)){
            return back()->withErrors(["password"=>"Password doesn't match!"]);
            if ($request->password < 5) {
                return back()->withErrors(["password"=>"Password must be atleast 6 characters long."]);
            }
        }

        $owner = ToiletOwner::findOrFail($id);
        $owner->name = $request->ownername;
        $owner->email = $request->email;
        $owner->password = Hash::make($request->password);
        $owner->mobileno = $request->contactno;
        $owner->save();
        return back()->with('toast.o','Personal information changed successfully');
    }

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
        // return var_dump($request->ownerId);
        $validate = Validator::make($request->all(),[
            'profile' => 'required|image|mimes:jpeg,jpg,png|max:3064'
        ],
        [
            'profile.required' => 'Please select an image',
            'profile.image' => 'Please select an image type',
            'profile.mimes' => 'Allowed image types are .jpeg, .jpg & .png',
            'profile.max' => 'You can only upload image size within 3MB',
        ] );
         
        if($validate->fails())
        {
            return back()->withErrors($validate);
        }

        if ($request->ownerId)
            $owner = ToiletOwner::find($request->ownerId);
        else
            $owner = ToiletOwner::find(Auth::user()->id);

        if($owner->profile!=null)
            Storage::delete('public/profileimages/'.$owner->profile);

        if ($request->ownerId)
            $name = $request->ownerId.'_'.$request->profile->getClientOriginalName();
        else
            $name = Auth::user()->id.'_'.$request->profile->getClientOriginalName();

        $image = $request->profile->storeAs('profileimages',$name,'public');
        
        $owner->profile = $name;
        $owner->save();

        return back()->with('toast.o','Profile picture '.$name.' Uploaded');
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
