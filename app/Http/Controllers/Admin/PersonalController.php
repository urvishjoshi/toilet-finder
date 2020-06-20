<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Validator;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin01 = Admin::where('id',Auth::user()->id)->get();
        return view('admin.personal',compact('admin01'));
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

        if($request->profileBtn) {

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

            $admin = Admin::find(Auth::user()->id);
            if($admin->profile!=null)
                Storage::delete('public/profileimages/admin/'.$admin->profile);

            $name = Auth::user()->id.'_'.$request->profile->getClientOriginalName();
            $image = $request->profile->storeAs('profileimages/admin',$name,'public');
            
            $admin->profile = $name;
            $admin->save();

            return back()->with('a.toast','Profile picture '.$name.' Uploaded successfully');
        }
        return 'error occured';
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
        $validate = Validator::make($request->all(),[
            'name'   => 'required',
            'email'   => 'required|email',
            'contactno'   => 'required|numeric|min:10',
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

        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->mobileno = (int)$request->contactno;
        $admin->save();
        return back()->with('a.toast','Personal information changed successfully');

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
