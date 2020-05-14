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
        $user = User::where('email',$this->email)->first();
        return [
            "user_id" => $user->id,
            "name" => ucwords($user->name),
            "email" => $user->email,
            "phone" => $user->mobileno,
            "gender" => $user->gender,
            "age" => $user->age,
        ];
    }
}
