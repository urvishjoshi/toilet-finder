<?php

namespace App\Http\Controllers\Toiletowner;

use App\Http\Controllers\Controller;
use App\Model\ToiletInfo;
use App\Model\ToiletOwner;
use Auth;
use Illuminate\Http\Request;
class ToiletController extends Controller
{
    private $url = 'toiletowner.toilet.';
    public function index()
    {
        $toilets = ToiletInfo::with('owner')->where('owner_id','=',Auth::user()->id)->orderBy('status','desc')->get();
        return view($this->url.'index',compact('toilets'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $toilet = ToiletInfo::find($id)->where('owner_id','=',Auth::user()->id)->get();
        return view($this->url.'show',compact('toilet'));
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
