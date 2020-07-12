<?php

namespace App\Http\Resources;
use App\Http\Resources\UserResource;
use App\Model\ToiletUsageInfo;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "usage_id" => $this->id,
            "transaction_id" => $this->transaction_id,
            "user" => new UserResource($this->user),
            "toilet" => $this->toilet,
            "toilet_owner" => $this->owner,
        ];

    }
}
