<?php

namespace Libraries\helper;

use App\Models\User;

Class HelperSession
{
    /**
     * @param User $user
     */
    public static function makeUserSession(User $user)
    {
        session([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public static function clearUserSession()
    {
        session()->forget([
            'id',
            'name',
            'email',
        ]);
    }
}
