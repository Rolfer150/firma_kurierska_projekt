<?php

namespace App\Policies;

use App\Models\Przesylka;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrzesylkaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given Model can be Viewed by the user.
     *
     * @param  User  $user
     * @param  Przesylka $przesylka
     * @return bool
     */
    public function view(User $user, Przesylka $przesylka)
    {

        return $user->id === $przesylka->user_id;
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
