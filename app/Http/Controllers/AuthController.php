<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        //Check for Validation
        if ($validator->fails())
        {
            //Error Messages
            $response = [
                'success' => false,
                'message' => 'Error while Registering',
                'StatusCode' => 422,
                'errors'=>$validator->errors()->all(),
            ];
            return response($response, 422);
        }
 
        $request->email = strtolower($request->email);
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->toArray());
 
        return response()->json([
            'status' => 'success', 
            'message' => 'Registration successful',
            'resources' => $user
        ], 200);
    }
 
    /**
     * Login
     */
    public function login(Request $request)
    {
        //Validate login input data
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:6'
        ]);

        $request->email = strtolower($request->email);
        if (!auth()->once(['email' => $request->email,'password' => $request->password])) {
            return response([
                'message' => 'Invalid Credentials'
            ]);
        }

        $accessToken = auth()->user()->createToken('authToken',['session'])->accessToken;

        return response([
            'StatusCode' => 200,
            'success' => true,
            'message' => 'User Successfully Logged-in',
            'access_token' => $accessToken['token']
        ]);

    }

    /**
     * LogOut
     */
    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
}
