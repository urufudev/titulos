<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstituteResource extends JsonResource
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
            'modular' => $this->modular,
            'name' => $this->name,
            'local' => $this->local,
            'address' => $this->address,
            'type' => $this->type,
            'status' => $this->status,
        ];
    }
}
