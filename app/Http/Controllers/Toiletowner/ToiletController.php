<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Country;
use App\Model\State;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Auth;
use Illuminate\Http\Request;
class ToiletController extends Controller
{
    private $url = 'toiletowner.toilet.';
    public function index()
    {
        $toilets = ToiletInfo::where('owner_id','=',Auth::user()->id)->with('owner')->orderBy('status','desc')->get();
        $countries = Country::orderBy('country')->get();
        return view($this->url.'index',compact('toilets','countries'));
    }

    public function show($id)
    {
        if(request()->input('country_id')) {
            $states = State::where('country_id',request()->input('country_id'))->orderBy('state')->get();
            if(count($states)>0) {
                $data='<option>-select state-</option>';
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
                $data='<option>-select city-</option>';
                foreach ($cities as $city) {
                    $data = $data.'<option value="'.$city->id.'">'.$city->city.'</option>';
                }
                return $data;
            }
            else return $data=0;
        }

        $toilet = ToiletInfo::where('id','=',$id)->where('owner_id','=',Auth::user()->id)->get();
        $datas = [
            'countries' => Country::orderBy('country')->get(),
            'states' => State::where('country_id',$toilet[0]['country_id'])->orderBy('state')->get(),
            'cities' => City::where('state_id',$toilet[0]['state_id'])->orderBy('city')->get(),
        ];
        $datas = (object)$datas;
        return view($this->url.'show',compact('toilet','datas'));
    }

    public function store(Request $request)
    {
        $toilet = new ToiletInfo;
        $toilet->owner_id = Auth::user()->id;
        $toilet->toilet_name = $request->toiletname;
        $toilet->status = $request->toiletstatus;
        $toilet->price = $request->toiletprice;
        $toilet->toilet_name = $request->toilettype;
        $toilet->complex_name = $request->complexname;
        $toilet->address = $request->address;
        $toilet->country_id = $request->country;
        $toilet->state_id = $request->state;
        $toilet->city_id = $request->city;
        $toilet->toilet_lat = $request->newLat;
        $toilet->toilet_lng = $request->newLng;
        $toilet->save();
        return back();
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
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
        return redirect(route('toilets.index'));
    }

    public function destroy($id)
    {
        $delete = ToiletInfo::find($id);
        $delete->delete();
        return back();
    }
}
