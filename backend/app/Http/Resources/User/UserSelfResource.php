<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Profile\ProfileResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


class UserSelfResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'profile' => new ProfileResource($this->profile),
        ];
    }
}
