<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
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
        $thisOwner = ToiletOwner::where('id',Auth::user()->id)->get();
        $toilets = ToiletInfo::where('owner_id','=',Auth::user()->id)->with('owner')->orderBy('status','desc')->get();
        $countries = Country::orderBy('country')->get();
        return view($this->url.'index',compact('toilets','countries','thisOwner'));
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
        $validate = Validator::make($request->all(), [
            'toiletname'   => 'required|unique:toilet_infos,toilet_name',
            'complexname' => 'required',
            'address' => 'required',
            'toiletprice' => 'required|integer|min:0',
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
        $toilet->owner_id = Auth::user()->id;
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
        return back()->with('toast.o','Toilet '.$request->toiletname.' created');
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
        $validate = Validator::make($request->all(), [
            'toiletname'   => 'required',
            'complexname' => 'required',
            'address' => 'required',
            'toiletprice' => 'required|integer|min:0',
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
        return redirect(route('toilets.index'))->with('toast.o','Toilet '.$request->toiletname.' updated');
    }

    public function destroy($id)
    {
        $delete = ToiletInfo::find($id);
        $toilet = $delete->toilet_name;
        $delete->delete();
        return back()->with('toast.o','Toilet '.$toilet.' deleted!');
    }
}
