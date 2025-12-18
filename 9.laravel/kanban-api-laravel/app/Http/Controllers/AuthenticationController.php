<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //metodo para iniciar sesion
    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->where('password',$password)->first();
        if($user){
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'user' => $user->name,
                'email' => $user->email,
                'access_token' => $token, 
                'token_type' => 'Bearer'
            ], 200); 
        }else{
            return response()->json(['message' => 'Unauthorized'], 401);        
        }
    }


    //metodo para cerrar sesion
    public function logout(Request $request){
        //$request->user()->currentAccessToken()->delete();
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully'], 200);
    }
}
