<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:user')->except('api.logout');
    }

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email'   => 'required|email|exists:users,email',
            'password' => 'required|min:6'
        ],
        [
            'email.exists' => "Email doesn't exist!",
            'email.required' => 'Please enter an Email!',
            'password.required' => 'Please enter a Password!',
        ] );

        if($validate->fails())
        {
            $response = [
                'Validation Error' => $validate->errors(),
                'message' => 'Login Unsuccessful',
            ];
            return response()->json($response,200);
        }

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            
            $response = [
                'message' => 'Login Successful',
                'data'    => new UserResource($request),
                'token' => session()->all(),
            ];
            return response()->json($response,200);
        }
        return response()->json(['error'=>'something went wrong'],200);
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->forget('user');

        return redirect()->route('api.login');
    }
}
