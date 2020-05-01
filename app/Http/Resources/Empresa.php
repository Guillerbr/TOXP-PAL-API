<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Empresa extends JsonResource
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
            'id' => (int) $this->id,
            'email' => $this->email,
            'token' => $this->token,
            'status' => (int) $this->status,
            'cargo' => $this->cargo,
            'nome_responsavel' => $this->nome_responsavel,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}


