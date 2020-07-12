<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Http\Resources\Toilet\ToiletResource;
use App\Http\Resources\UserResource;
use App\Http\Traits\ResponseTrait;
use App\Model\ToiletInfo;
use App\Model\ToiletUsageInfo;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    use ResponseTrait;

    public function store($id, Request $request)
    {
        $validate = Validator::make($request->all(), [
            'user_id'   => 'required|numeric',
            'transaction_id'   => 'required|numeric',
        ]);

        if($validate->fails())
            return $this->sendError('Validation Error',$validate->errors());

        $data = ToiletInfo::find($id);
        if ($data!=null) $data = new ToiletResource($data);
        else return $this->sendError('Not found', ["Doesn't exists" => "Toilet data with ID-".$id." is not available"], 404);

        $user = User::find($request->user_id);
        if($user==null)
        return $this->sendError('Not found', ["Doesn't exists" => "User data with ID-".$request->user_id." is not available"], 404);
        $user = new UserResource($user);

        try {
            $usage = new ToiletUsageInfo;
            $usage->transaction_id = $request->transaction_id;
            $usage->toilet_id = $request->id;
            $usage->user_id = $request->user_id;
            $usage->owner_id = $data->owner->id;
            $usage->status = '1';
            $usage->save();
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                return $this->sendError('Duplicate transaction id', ["transaction_id" => "This transaction id-".$request->transaction_id." already exists!"], 500);
            }
        }
        return $this->sendResponse(new BookResource($usage),'Toilet booked successfully',201);
    }
    
    public function index()
    {
        
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
