<?php

namespace App\Http\Controllers\Admin;

use App\Model\Baner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Carbon\Carbon;

class BanerController extends Controller
{
    private $url = 'admin.baner.';
    public function index()
    {
        $baners = Baner::all();
        return view($this->url.'index',compact('baners'));
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
        $validate = Validator::make($request->all(),[
            'file' => 'required|image|mimes:jpeg,jpg,png|max:3064'
        ],
        [
            'file.required' => 'Please select an image',
            'file.image' => 'Please select an image type',
            'file.mimes' => 'Allowed image types are .jpeg, .jpg & .png',
            'file.max' => 'You can only upload image size within 3MB',
        ] );
         
        if($validate->fails())
        {
            return back()->withErrors($validate);
        }

        $time = date('His');

        $name = $time.'_'.$request->file->getClientOriginalName();
        $image = $request->file->storeAs('baners',$name,'public');

        $baner = new Baner;
        $baner->image = $name;
        $baner->url = asset('storage/baners/'.$name);
        
        $baner->save();
        return back()->with('a.toast','Baner Image '.$request->file->getClientOriginalName().' Uploaded as '.$name.' successfully');
    }

    public function destroy(Baner $baner)
    {
        $delImage = $baner->image;
        Storage::delete('public/baners/'.$baner->image);
        $baner->delete();
        return back()->with('a.toast','Baner Image '.$delImage.' deleted successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function show(Baner $baner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function edit(Baner $baner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baner $baner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baner  $baner
     * @return \Illuminate\Http\Response
     */
}
