<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
        return view($this->url.'add');
    }

    public function store(Request $request)
    {
        if ($request->byAdmin) {
            $validate = Validator::make($request->all(), [
                'name'   => 'required|string|max:255',
                'email'   => 'required|email|unique:toilet_owners,email',
                'password' => 'required|min:6|confirmed',
                'mobileno' => 'required|numeric|min:10|unique:toilet_owners,mobileno',
            ],
            [
                'email.unique' => 'Email already exists try logging-in or use another!',
                'mobileno.unique' => 'Phone number exists try logging-in or use another!',
                'email.required' => 'Please enter an Email!',
                'password.required' => 'Please enter a Password!',
            ] );

            if($validate->fails())
            {
                return back()->withInput($request->except('password'))->withErrors($validate);
            }

            $writer = ToiletOwner::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'mobileno' => $request['mobileno'],
                'status' => '1',
                'password' => Hash::make($request['password']),
            ]);
            return redirect()->route('a.toiletowners.index')->with('a.toast','Toiletowner '.$request['email'].' Added & Approved successfully');
        }
        
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
        if ($request->ownerId) {
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

            $owner = ToiletOwner::find($request->ownerId);

            if($owner->profile!=null)
                Storage::delete('public/profileimages/'.$owner->profile);

            $name = $request->ownerId.'_'.$request->profile->getClientOriginalName();

            $image = $request->profile->storeAs('profileimages',$name,'public');
            
            $owner->profile = $name;
            $owner->save();

            return back()->with('a.toast','Profile picture '.$name.' Uploaded manually!');
        }

        $validate = Validator::make($request->all(), [
            'email'   => 'required|email|unique:toilet_owners,email,'.$id,
            'contactno'   => 'required|numeric|min:10|unique:toilet_owners,mobileno,'.$id,
        ],
        [
            'email.exists' => 'Email doesn'."'".'t exist!',
            'email.required' => 'Please enter an Email!',
            'contactno.required' => 'Please enter a mobile number!',
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

        $owner = ToiletOwner::findOrFail($id);
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
