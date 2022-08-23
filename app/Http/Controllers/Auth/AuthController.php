<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Cache;


class AuthController extends Controller
{


    use HasApiTokens;

    public function login(AuthRequest $request)
    {
        $email = $request->email;
        $password = $request->password;

//        $credentials = $request->validate([
//            'email' => ['required', 'email'],
//            'password' => ['required'],
//        ]);

//        if (\Auth::attempt($credentials)) {
//            $user  = \Auth::user();
        if (\Auth::attempt(['email' => $email, 'password' => $password])) {
            $user = \Auth::user();
            if (Cache::has($email)) {
                $token = Cache::get($email);
                return response()->json(['token' => $token->plainTextToken, 'error' => 0, 'data' => \Auth::user()->toArray()], 200);
            }
            else{
                $token = $user->createToken("testToken");
                Cache::put($email,$token,3600);
                return response()->json(['token' => $token->plainTextToken, 'error' => 0, 'data' => \Auth::user()->toArray()], 200);
            }
        }
        else {
            return response()->json(['message' => 'Kullanıcı tanımlı değil.', 'error' => 1], 401);
        }

    }

}