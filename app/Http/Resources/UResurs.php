<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UResurs extends JsonResource
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
            'Ime prezime: ' => $this->resource->ime_prezime,
            'Umetnicko ime: ' => $this->resource->umetnicko_ime,
            'Drzava: ' => $this->resource->drzava,
            'Godine: ' => $this->resource->godine,
        ];
    }
}
