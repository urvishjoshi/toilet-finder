<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use App\Model\ToiletOwner;
use Auth;
use Illuminate\Http\Request;
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
        $owner = ToiletOwner::findOrFail($id);
        $owner->name = $request->ownername;
        $owner->email = $request->email;
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

        $owner = ToiletOwner::find(Auth::user()->id);
        if($owner->profile!=null)
            unlink(public_path().'/profileimages/'.$owner->profile);

        $image = $request->file('profile');
        $name = Auth::user()->id.'_'.$image->getClientOriginalName();
        $image->move(public_path('profileimages'),$name);
        
        $owner->profile = $name;
        $owner->save();

        return back()->with('toast.o','Profile image '.$image->getClientOriginalName().' Uploaded');
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
