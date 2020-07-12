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
            'id' => $this->id,
            'name' => $this->toilet_name,
            'toilet_status' => $this->getStatus(),
            'toilet_type' => $this->getType(),
            'price' => (float)$this->price,
            'address' => $this->address,
            'country' => $this->getCountry(),
            'state' => $this->getState(),
            'city' => $this->getCity(),
            'latitude' => (float)$this->toilet_lat,
            'longitude' => (float)$this->toilet_lng,
            'href' => [
                'view' => route('api.toilets.show',$this->id),
            ],
        ];
    }
}
