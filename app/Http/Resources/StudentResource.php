<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            /* 'institute_id' => [
                'name' => $this->institute->name ?? '',
            ],
            'carrer_id' => [
                'name' => $this->carrer->name ?? '',
            ], */
            'institute' => ($this->institute) ? new InstituteResource($this->institute) : NULL,
            'carrer' => ($this->carrer) ? new CarrerResource($this->carrer) : NULL,
            'name' => $this->name,
            'ap_paterno' => $this->ap_paterno,
            'ap_materno' => $this->ap_materno,
            'document_type' => $this->document_type,
            'document_number' => (string)$this->document_number,
            'title_number' => (string)$this->title_number,
            'title_name' => $this->title_name,
            'title_level' => $this->title_level,
            'title_date' => $this->title_date,
            'title_code' => $this->title_code,
            'title_regnumber' => $this->title_regnumber,
            'title_resnumber' => $this->title_resnumber,
            'title_regdate' => $this->title_regdate,
            'title_regbook' => $this->title_regbook,
            'title_folio' => $this->title_folio,
            'ins_director' => $this->ins_director,
            'ins_secretary' => $this->ins_secretary,
            'dre_secretary' => $this->dre_secretary,
            'dre_certificate' => $this->dre_certificate,
            'title_pdf' => $this->title_pdf,

        ];
    }
}
