<?php

namespace App\Providers;

use App\Models\SocialAccount;
use App\Models\User;
use Laravel\Socialite\Contracts\User as SocialiteUser;

class SocialAccountServiceProvider {

    public function createOrGetUser(SocialiteUser $socialiteUser, $provider) {

        $account = SocialAccount::where('provider', $provider)->where('provider_id', $socialiteUser->getId())->first();

        if($account)
            return $account->user;

        $account = new SocialAccount(['provider' => $provider, 'provider_id' => $socialiteUser->getId()]);

        switch($provider) {
            default:
                $name = $socialiteUser->getName();
        }

        $user = new User(['name' => $name]);
        $user->save();

        $account->user()->associate($user);
        $account->save();

        return $user;

    }

}
