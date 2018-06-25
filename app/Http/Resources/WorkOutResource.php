<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkOutResource extends JsonResource
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
            'user_id'=>$request->user_id,
            'date'=>$request->date,
            'location'=>$request->location,
            'exercise_name'=>$request->exercise_name,
            'reps'=>$request->reps,
            'sets'=>$request->sets,
        ];
    }
}
