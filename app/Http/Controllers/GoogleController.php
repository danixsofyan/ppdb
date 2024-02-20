<?php

namespace App\Http\Controllers;

use App\Models\ModelHasRoles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        // Return  after login
        return redirect('dashboard');
    }
    protected function _registerOrLoginUser($data)
    {
        $user       = User::where('email', '=', $data->email)->first();

        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->provider_photo = $data->avatar;
            $user->email_verified_at = date("Y-m-d H:i:s");
            $user->save();
        }

        Auth::login($user);
        $id_user    = Auth::user()->id;
        $check_user = ModelHasRoles::where('model_id', $id_user)->get();
        if ($check_user == "[]") {
            $user->assignRole('User');
        }
    }
}
