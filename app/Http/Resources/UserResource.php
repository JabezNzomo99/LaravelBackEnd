<?php

namespace App\Http\Resources;

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
//        return parent::toArray($request);
        return[
            'FirstName'=>$this->FirstName,
            'LastName'=>$this->LastName,
            'email'=>$this->email,
            'password'=>$this->password
        ];
    }
}
