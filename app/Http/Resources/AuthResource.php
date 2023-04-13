<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'created_at' => $this->email,
            'updated_at' => $this->updated_at,
            'email_verified_at' => $this->email_verified_at,
            'two_factor_confirmed_at' => $this->two_factor_confirmed_at
        ];
    }
}
