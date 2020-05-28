<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Country;
use App\Model\State;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    private $url = 'admin.location.';
    public function index()
    {
        $countries = Country::orderBy('country')->get();
        $states = State::orderBy('state')->get();
        return view($this->url.'index',compact('countries','states'));
    }

    public function show($id)
    {
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
        if($request->addCountry){
            $country = new Country;
            $country->country =  $request->addCountry;
            $country->save();
            return back()->with('a.toast','Country '.$request->addCountry.' added');
        }
        if($request->addState){
            $state = new State;
            $state->country_id =  $request->countryId;
            $state->state =  $request->addState;
            $state->save();
            return back()->with('a.toast','Governance '.$request->addState.' added');
        }
        if($request->addCity){
            $city = new City;
            $city->country_id =  $request->countryId;
            $city->state_id =  $request->stateId;
            $city->city =  $request->addCity;
            $city->save();
            return back()->with('a.toast','City '.$request->addCity.' added');
        }
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
        $countries = Country::orderBy('country')->get();
        $states = State::orderBy('state')->get();
        return view($this->url.'edit',compact('countries','states'));
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
        
        // return request()->all();
        if ($request->countryEditBtn) {
            // return'cunty';
            $country = Country::findOrFail($request->countryId);
            $old = $country->country;
            $country->country = $request->editCountry;
            $country->save();
            return back()->with('a.toast','Country '.$old.' edited to '.$request->editCountry);
        }
        if ($request->stateEditBtn) {
            // return'stt';
            $state = State::findOrFail($request->stateId);
            $old = $state->state;
            $state->state = $request->editState;
            $state->save();
            return back()->with('a.toast','Governance '.$old.' edited to '.$request->editState);
        }
        if ($request->cityEditBtn) {
            // return'city';
            $city = City::findOrFail($request->cityId);
            $old = $city->city;
            $city->city = $request->editCity;
            $city->save();
            return back()->with('a.toast','City '.$old.' edited to '.$request->editCity);
        }

        return 'error';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = request()->input('formid');
        if($id==1) {
            $delete = Country::find(request()->input('countryId'));
            $msg = 'Country '.$delete->country.' has been successfully deleted';
        }
        if($id==2) {
            $delete = State::find(request()->input('stateId'));
            $msg = 'Governance '.$delete->state.' has been successfully deleted';
        }
        if($id==3) {
            $delete = City::find(request()->input('cityId'));
            $msg = 'City '.$delete->city.' has been successfully deleted';
        }
        
        $delete->delete();
        return back()->with('a.toast',$msg);
    }
}
