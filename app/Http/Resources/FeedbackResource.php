<?php

namespace App\Http\Resources;

use App\Model\Feedback;
use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackResource extends JsonResource
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
            // "user_id" => $this->feedbacker_id,
            "description" => $this->desc,
            "subject" => $this->subject,
            "sent_at" => $this->created_at,
        ];
    }
}
