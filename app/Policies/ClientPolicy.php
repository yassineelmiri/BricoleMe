<?php

namespace App\Policies;

use App\Models\client;
use Illuminate\Auth\Access\Response;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\GenericUser;

class ProfilePolicy
{

    public function update(GenericUser $user, client $client): bool
    {
        return $user->id === $client->id ;

    }

}
