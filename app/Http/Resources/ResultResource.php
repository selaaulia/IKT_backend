<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
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
            'id'                => $this->id,
            'transformator'     => $this->input->transformator->name,
            'penguji'           => $this->input->penguji->name,
            'method'            => $this->method,
            'H2'                => $this->input->h2 ?? '',
            'CH4'               => $this->input->CH4 ?? '',
            'C2H2'              => $this->input->C2H2 ?? '',
            'C2H4'              => $this->input->C2H4 ?? '',
            'C2H6'              => $this->input->C2H6 ?? '',
            'fault'             => $this->Fault,
            'description'       => $this->description,
            'date'              => $this->created_at->format('d-m-Y'),
        ];
    }
}
