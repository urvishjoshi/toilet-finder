<?php

namespace App\Http\Traits;

use App\Http\Controllers\Controller;
use App\Http\Resources\Toilet\ToiletCollection;
use App\Http\Resources\Toilet\ToiletResource;
use App\Model\ToiletInfo;
use Illuminate\Http\Request;

trait ResponseTrait
{
    public function sendResponse($result, $message='Success',$code=200)
    {
        $response = [
            'status' => true,
            'message' => $message,
            'data'    => $result,
        ];

        return response()->json($response,$code);
    }


    public function sendError($error, $errorMessages = [], $code = 200)
    {
        $response = [
            'status' => false,
            'message' => $error,
        ];


        if(!empty($errorMessages)){
            $response['errors'] = $errorMessages;
        }

        return response()->json($response, $code);
    }
}
