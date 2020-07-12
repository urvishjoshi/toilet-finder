<?php

namespace App\Http\Resources;

use App\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "user_id" => $this->id,
            "name" => ucwords($this->name),
            "email" => $this->email,
            "phone" => (int)$this->mobileno,
            "gender" => $this->gender==1 ? 'Male' : 'Female',
            "age" => (int)$this->age,
            "href" => [
                "history" => route('api.usages',$this->id)
            ],
        ];
    }
}
