<?php

namespace App;

use Laravel\Socialite\Contracts\Provider;

use App\Profile;

class SocialAccountService
{
    public function createOrGetUser(Provider $provider)
    {

        $providerUser = $provider->user();
        $providerName = class_basename($provider);

        $account = SocialAccount::whereProvider($providerName)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'avatar' =>$providerUser->getAvatar(),
                    'slug' => str_slug($providerUser->getName()),
                ]);
                
                Profile::create(['user_id' => $user->id, 'name' => $user->name ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}