<?php

namespace App\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class DataSMSTransformers extends JsonResource
{
    public function toArray($request)
    {    
        return [
           "id" => $this->id,
           "cabang" => $this->id."-".$this->cabang,
        ];
    }
}