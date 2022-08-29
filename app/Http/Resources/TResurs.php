<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TResurs extends JsonResource
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
            'Id: ' => $this->resource->id,
            'Drzava: ' => $this->resource->drzava,
            'Naziv: ' => $this->resource->naziv,
            'Godina: ' => $this->resource->godina,
            'Instagram: ' => $this->resource->instagram,
        ];
    }
}
