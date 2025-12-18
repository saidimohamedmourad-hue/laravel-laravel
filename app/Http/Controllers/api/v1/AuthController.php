<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only("email","password");;
        $token = auth('api')->attempt($credentials);
        if(!$token){
            return response(['message' =>'unauthorized '],401);
        }
        return response([
            'access_token'=> $token,
            'expired_in'=> auth('api')->factory()->getttl()*60
            ]);
    }
}
