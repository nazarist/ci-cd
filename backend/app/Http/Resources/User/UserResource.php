<?php

namespace App\Http\Resources\User;

use App\Http\Resources\Profile\ProfileResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        $profile = $this->profile;

        if (is_null($profile)) {
            return ['name' => $this->name];
        }

        return [
            'name' => $this->name,
            'full_name' => $profile->f_name . ' ' . $profile->l_name,
            'group'  => $profile->group->name,
        ];
    }
}
