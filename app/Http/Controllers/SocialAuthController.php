<?php

namespace App\Http\Controllers;

use App\Providers\SocialAccountServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller {

    public function signin($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(SocialAccountServiceProvider $sasp, $provider) {
        $user = $sasp->createOrGetUser(Socialite::driver($provider)->stateless()->user(), $provider);

        auth()->guard('web')->login($user);

        return redirect()->to('/');
    }

}
