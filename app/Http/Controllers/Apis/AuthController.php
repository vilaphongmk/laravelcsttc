<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\tbl_roles;
use App\Models\tbl_user_contacts;
use App\Models\tbl_users;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function login(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                "email" => "Please enter a valid email 7777",
            ]
        );

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validate->errors()
            ], 200);
        }

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response()->json([
                'status' => 'error',
                'errors' => 'Email & Password does not match with our record.',
            ], 200);
        }


        try {
            $user = tbl_users::where('email', $request->email)->first();
            $role = $user->tbl_roles;

            return response()->json([
                'status' => 'success',
                'message' => 'User Logged In Successfully',
                'token_type' => 'Bearer',
                'token' => $user->createToken("API TOKEN")->plainTextToken,
                'user' =>  $user,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function me(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'user' => $request->user()
        ], 200);
    }

    public function error()
    {
        return  response()->json(
            [
                "status" => "error",
                "message" => "ກະລຸນາເຂົ້າສູ່ລະບົບ",
            ]
        );
    }
}
