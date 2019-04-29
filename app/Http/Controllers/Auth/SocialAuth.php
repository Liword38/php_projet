<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\User;

class SocialAuth extends Controller {

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        
        $authUser=User::firstOrNew(['provider_id'=>$user->id]);
        $authUser->name=$user->name;
        $authUser->email=$user->email;
        $authUser->provider=$provider;
        $authUser->save();
        auth()->login($authUser);

        return redirect('/');
        
    }
}