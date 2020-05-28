<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Http\Request;
use Validator;
use Auth;

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
                // return response()->json([
                //     'message' => $validate->errors()->all(),
                // ]);
            }

            $admin = Admin::find(Auth::user()->id);
            if($admin->profile!=null)
                unlink(public_path().'/profileimages/admin/'.$admin->profile);

            $image = $request->file('profile');
            $name = Auth::user()->id.'_'.$image->getClientOriginalName();
            $image->move(public_path('profileimages/admin'),$name);
            
            $admin->profile = $name;
            $admin->save();

            return back()->with('a.toast','Profile image '.$image->getClientOriginalName().' Uploaded');
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
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->mobileno = $request->contactno;
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
