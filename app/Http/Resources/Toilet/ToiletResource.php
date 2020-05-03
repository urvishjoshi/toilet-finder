<?php

namespace App\Http\Resources\Toilet;

use Illuminate\Http\Resources\Json\JsonResource;

class ToiletResource extends JsonResource
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
            'toilet_owner' => $this->getOwner(),
            'name' => $this->toilet_name,
            'price' => $this->price,
            'complex' => $this->complex_name,
            'address' => $this->address,
            'country' => $this->getCountry(),
            'state' => $this->getState(),
            'city' => $this->getCity(),
            'toilet_type' => $this->getType(),
            'toilet_status' => $this->getStatus(),
            'latitude' => $this->toilet_lat,
            'longitude' => $this->toilet_lng,
            'rating' => $this->getAverageRating(),
            'href' => [
                'book' => route('api.book.index',$this->id),
                'reviews' => route('api.ratings.show',[$this->id,$this->id]),
            ],
        ];
    }
}
