<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Traits\ResponseTrait;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    use ResponseTrait;

    public function user($id)
    {
        $user = User::find($id);
        if($user!=null)
        return $this->sendResponse(new UserResource($user));
        return $this->sendError('Not found', ["Doesn't exists" => "User data with ID-".$id." is not available"], 404);
    }

    public function usages($id)
    {
        $user = User::find($id);
        if($user==null)
        return $this->sendError('Not found', ["Doesn't exists" => "User data with ID-".$id." is not available"], 404);
        $user = new UserResource($user);
        $usages = $user->toiletusages;
        if (count($usages)==0)
            return $this->sendResponse($user->toiletusages,'No usages done yet');
        return $this->sendResponse($user->toiletusages);

    }

    public function index()
    {
        return;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Store a newly created resource in storage.
     */
    public function create()
    {
        //
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
