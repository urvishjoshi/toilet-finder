<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ToiletInfo;
use Illuminate\Http\Request;

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
        $name = request()->input('name');
        $toilets = ToiletInfo::where('owner_id','=',$id)->with('owner')->orderBy('status', 'desc')->get();
        return view($this->url.'show',compact('toilets','name'));
    }

    public function store(Request $request)
    {
        
        //
    }

    public function create()
    {
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
