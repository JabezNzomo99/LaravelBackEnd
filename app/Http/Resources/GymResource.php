<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GymResource extends JsonResource
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
            'Latitude'=>$this->Latitude,
            'Longitude'=>$this->Longitude,
            'GymName'=>$this->GymName,
            'Rating'=>$this->Rating,
            'PhoneNumber'=>$this->PhoneNumber,
            'Open'=>$this->Open,
            'Close'=>$this->Close,
        ];
    }
}
