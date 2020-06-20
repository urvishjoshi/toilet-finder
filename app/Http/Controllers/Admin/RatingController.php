<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Rating;
use App\Model\ToiletInfo;
use Illuminate\Http\Request;
use Auth;

class RatingController extends Controller
{
    private $url = 'admin.rating.';
    public function index()
    {
        $ratings = Rating::with('toilet')->with('user')->get();
        $toilets = ToiletInfo::with('ratings')->with('owner')->get();

        return view($this->url.'index',compact('ratings','toilets'));
    }

    public function show($id)
    {
        $name = request()->input('name');
        $ratings = ToiletInfo::where('id','=',$id)->with('ratings')->get();

        return view($this->url.'show',compact('ratings','name'));
    }

    public function store(Request $request)
    {
        $rating = Rating::find($request->input('id'));
        $status = $request->input('visible');
        if ($status=='0') {
            $rating->visible = '1';
            $rating->save();
            return response()->json(['visible'=>'1']);
        }
        else {
            $rating->visible = '0';
            $rating->save();
            return response()->json(['visible'=>'0']);
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
