<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function loginVK() {
        if (Auth::check()) {
            return redirect()->route('Home');
        }
        return Socialite::with('vkontakte')->redirect();
    }

    public function responseVK(UserRepository $userRepository) {
        if (Auth::check()) {
            return redirect()->route('Home');
        }
        $user = Socialite::driver('vkontakte')->user();

        $userInSysem = $userRepository->getUserBySocId($user, 'vk');
        Auth::login($userInSysem);
        return redirect()->route('Home');
    }
}
