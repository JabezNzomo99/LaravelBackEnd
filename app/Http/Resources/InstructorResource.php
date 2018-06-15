<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstructorResource extends JsonResource
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
            'FirstName'=>$this->FirstName,
            'LastName'=>$this->LastName,
            'PhoneNumber'=>$this->PhoneNumber,
            'Email'=>$this->Email,
            'PhotoUrl'=>$this->PhotoUrl,
        ];
    }
}
