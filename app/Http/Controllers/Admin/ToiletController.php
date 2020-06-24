<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Country;
use App\Model\State;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ToiletController extends Controller
{
    private $url = 'admin.toilet.';
    public function index()
    {
        $toilets = ToiletInfo::with('owner')->orderBy('status', 'desc')->get();
        return view($this->url.'index',compact('toilets'));
    }

    public function show($id)
    {
        if($name = request()->input('name'))
        {
            $toilets = ToiletInfo::where('owner_id','=',$id)->with('owner')->orderBy('status', 'desc')->get();
            return view($this->url.'show',compact('toilets','name'));
        }

        if(request()->input('country_id')) {
            $states = State::where('country_id',request()->input('country_id'))->orderBy('state')->get();
            if(count($states)>0) {
                $data='<option value="">-select governance-</option>';
                foreach ($states as $state) {
                    $data = $data.'<option value="'.$state->id.'">'.$state->state.'</option>';
                }
                return $data;
            }
            else return $data=0;
        }
        if(request()->input('state_id')) {
            $cities = City::where('state_id',request()->input('state_id'))->orderBy('city')->get();
            if(count($cities)>0) {
                $data='<option value="">-select city-</option>';
                foreach ($cities as $city) {
                    $data = $data.'<option value="'.$city->id.'">'.$city->city.'</option>';
                }
                return $data;
            }
            else return $data=0;
        }

        $toilet = ToiletInfo::where('id',$id)->get();
        $datas = [
            'countries' => Country::orderBy('country')->get(),
            'states' => State::where('country_id',$toilet[0]['country_id'])->orderBy('state')->get(),
            'cities' => City::where('state_id',$toilet[0]['state_id'])->orderBy('city')->get(),
        ];
        $datas = (object)$datas;
        return view($this->url.'edit',compact('toilet','datas'));
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'toiletname'   => 'required|unique:toilet_infos,toilet_name,'.$id,
            'complexname' => 'required',
            'address' => 'required',
            'toiletprice' => 'required|min:0',
        ],
        [
            'toiletname.required' => 'Please enter a toilet name',
            'complexname.required' => 'Please enter complex name of your toilet',
            'address.required' => 'Please enter address of your toilet',
            'toiletprice.required' => 'Minimum value is 0',
            'toiletprice.min' => 'Minimum value is 0',
        ] );

        if($validate->fails())
        {
            return back()->withInput($request->all())->withErrors($validate);
        }

        $toilet = ToiletInfo::find($id);
        $toilet->toilet_name = $request->toiletname;
        $toilet->price = $request->toiletprice;
        $toilet->complex_name = $request->complexname;
        $toilet->address = $request->address;
        $toilet->country_id = $request->country;
        $toilet->state_id = $request->state;
        $toilet->city_id = $request->city;
        $toilet->toilet_lat = $request->newLat;
        $toilet->toilet_lng = $request->newLng;
        $toilet->type = $request->toilettype;
        $toilet->status = $request->toiletstatus;
        $toilet->save();
        return redirect(route('a.toilets.index'))->with('a.toast','Toilet ID '.$id.' named '.$request->toiletname.' updated manually!');
    }

    public function create()
    {
        $countries = Country::orderBy('country')->get();
        $owners = ToiletOwner::where('status','1')->get();
        return view($this->url.'add',compact('countries','owners'));
    }


    public function store(Request $request)
    {
        // return $request;
        $validate = Validator::make($request->all(), [
            'toiletname'   => 'required|unique:toilet_infos,toilet_name',
            'complexname' => 'required',
            'address' => 'required',
            'toiletprice' => 'required|min:0',
        ],
        [
            'toiletname.required' => 'Please enter a toilet name',
            'toiletname.unique' => 'This name is already in use, try another',
            'complexname.required' => 'Please enter complex name of your toilet',
            'address.required' => 'Please enter address of your toilet',
            'toiletprice.required' => 'Minimum value is 0',
            'toiletprice.min' => 'Minimum value is 0',
        ] );

        if($validate->fails())
        {
            return (back()->withInput($request->all())->withErrors($validate));
        }

        $toilet = new ToiletInfo;
        $toilet->owner_id = $request->owner_id;
        $toilet->toilet_name = $request->toiletname;
        $toilet->status = $request->toiletstatus;
        $toilet->price = $request->toiletprice;
        $toilet->type = $request->toilettype;
        $toilet->complex_name = $request->complexname;
        $toilet->address = $request->address;
        $toilet->country_id = $request->country;
        $toilet->type = $request->toilettype;
        $toilet->state_id = $request->state;
        $toilet->city_id = $request->city;
        $toilet->toilet_lat = $request->newLat;
        $toilet->toilet_lng = $request->newLng;
        $toilet->save();
        return back()->with('a.toast','Toilet '.$request->toiletname.' created');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
        $delete = ToiletInfo::findOrFail($id);
        $msg = 'Toilet '.$delete->toilet_name.' has been successfully deleted';
        $delete->delete();
        return back()->with('a.toast',$msg);
    }
}
