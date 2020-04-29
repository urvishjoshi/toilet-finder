<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Country;
use App\Model\State;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('country')->get();
        return view('admin/location',compact('countries'));
    }

    public function show($id)
    {
        if(request()->input('country_id')) {
            $states = State::where('country_id',request()->input('country_id'))->get();
            $data='';
            foreach ($states as $state) {
                $data = $data.'<option value="'.$state->id.'">'.$state->state.'</option>';
            }
            return $data;
        }
        if(request()->input('state_id')) {
            $cities = City::where('state_id',request()->input('state_id'))->get();
            $data='';
            foreach ($cities as $city) {
                $data = $data.'<option value="'.$city->id.'">'.$city->city.'</option>';
            }
            return $data;
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
        //
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
        //
    }
}
