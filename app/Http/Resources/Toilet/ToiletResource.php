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
            'id' => $this->id,
            'toilet_owner' => $this->getOwner(),
            'name' => $this->toilet_name,
            'price' => (float)$this->price,
            'complex' => $this->complex_name,
            'address' => $this->address,
            'country' => $this->getCountry(),
            'state' => $this->getState(),
            'city' => $this->getCity(),
            'toilet_type' => $this->getType(),
            'toilet_status' => $this->getStatus(),
            'latitude' => (float)$this->toilet_lat,
            'longitude' => (float)$this->toilet_lng,
            'rating' => (int)$this->getAverageRating(),
            'href' => [
                'book' => route('api.book.store',$this->id),
                'reviews' => route('api.showRating',$this->id),
            ],
        ];
    }
}
