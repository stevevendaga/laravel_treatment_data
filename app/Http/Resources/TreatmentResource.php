<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TreatmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'data1' => $this->data1,
            'data2' => $this->data2,
           ];
    }
    public function with($request){
        return [
         'version' => "1.0.0",
         'author_url' => "http://stephen.net"
        ];
       }
}
