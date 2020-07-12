<?php

namespace App\Http\Controllers;

use App\Http\Resources\FeedbackResource;
use App\Http\Traits\ResponseTrait;
use App\Model\Feedback;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $feedbacks = Feedback::where('feedbacker_id',Auth::user()->id)->where('feedbacker_type','1')->get();
        return view('toiletowner.feedback',compact('feedbacks'));
    }
    
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'subject'   => 'required|string|max:255',
            'description'   => 'required',
        ]);

        if($validate->fails())
        {
            return back()->withInput($request->all())->withErrors($validate);
        }

        $feedback = new Feedback;
        $feedback->feedbacker_id = Auth::user()->id;
        $feedback->feedbacker_type = '1';
        $feedback->subject = $request->subject;
        $feedback->desc = $request->description;
        $feedback->save();
        return back()->with('toast.o','Thanks for your feedback');
    }

    public function user($id, Request $request)
    {
        $validate = Validator::make($request->all(), [
            'subject'   => 'required|string|max:255',
            'description'   => 'required',
        ]);

        if($validate->fails())
            return $this->sendError('Validation Error',$validate->errors());
        
        $feedback = new Feedback;
        $feedback->feedbacker_id = $id;
        $feedback->feedbacker_type = '2';
        $feedback->subject = $request->subject;
        $feedback->desc = $request->description;
        $feedback->save();
        return $this->sendResponse($feedback,'Feedback sent',201);
    }

    public function show($id)
    {
        $feedback = Feedback::where('feedbacker_id',$id)->where('feedbacker_type','2')->get();
        if (count($feedback)<1)
            return $this->sendResponse($feedback,'No feedbacks given yet');
        return $this->sendResponse($feedback);
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
        
    }
}
