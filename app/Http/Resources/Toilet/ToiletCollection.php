<?php

namespace App\Http\Resources\Toilet;

use Illuminate\Http\Resources\Json\Resource;

class ToiletCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->toilet_name,
            'toilet_status' => $this->getStatus(),
            'toilet_type' => $this->getType(),
            'country' => $this->getCountry(),
            'state' => $this->getState(),
            'city' => $this->getCity(),
            'latitude' => $this->toilet_lat,
            'longitude' => $this->toilet_lng,
            'href' => [
                'view' => route('api.toilets.show',$this->id),
            ],
        ];
    }
}
