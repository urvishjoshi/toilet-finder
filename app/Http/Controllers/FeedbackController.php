<?php

namespace App\Http\Controllers;

use App\Model\Feedback;
use Illuminate\Http\Request;
use Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::where('feedbacker_id',Auth::user()->id)->where('feedbacker_type','1')->get();
        return view('toiletowner.feedback',compact('feedbacks'));
    }
    
    public function store(Request $request)
    {
        $feedback = new Feedback;
        $feedback->feedbacker_id = Auth::user()->id;
        $feedback->feedbacker_type = '1';
        $feedback->subject = $request->subject;
        $feedback->desc = $request->description;
        $feedback->save();
        return back();
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
    public function show($id)
    {
        //
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
