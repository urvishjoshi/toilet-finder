<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Toilet\ToiletCollection;
use App\Http\Resources\Toilet\ToiletResource;
use App\Model\ToiletInfo;
use App\Http\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ToiletController extends Controller
{
    use ResponseTrait;

    public function index()
    {
        $data = ToiletCollection::collection(ToiletInfo::all());
        return $this->sendResponse($data);
    }

    public function show($toilet)
    {
        $data = ToiletInfo::find($toilet);
        if ($data!=null) return $this->sendResponse(new ToiletResource($data));
        return $this->sendError('Not found', ["Doesn't exists" => "Toilet data with ID-".$toilet." is not available"], 404);
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
