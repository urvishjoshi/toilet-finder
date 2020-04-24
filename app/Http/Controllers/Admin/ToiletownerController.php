<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Illuminate\Http\Request;

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
        $toilets = ToiletInfo::where('owner_id','=',$id)->with('owner')->get();

        return view($this->url.'show',compact('toilets','name'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }

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
