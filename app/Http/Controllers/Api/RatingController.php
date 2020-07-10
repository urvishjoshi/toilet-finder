<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RatingResource;
use App\Model\ToiletInfo;
use App\Http\Traits\ResponseTrait;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    use ResponseTrait;

    public function index()
    {
    }
    public function showRating($id)
    {
        $toilet = ToiletInfo::find($id);
        if ($toilet==null)
            return $this->sendError('Not found', ["Doesn't exists" => "Toilet with ID-".$id." is not available"], 404);

        if (count($toilet->ratings)==0) return $this->sendResponse($toilet->ratings,'No ratings yet');
            
        else return $this->sendResponse(RatingResource::collection($toilet->ratings));
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
