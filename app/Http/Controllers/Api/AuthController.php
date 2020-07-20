<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTrait;
use App\Http\Resources\UserResource;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    use ResponseTrait;

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
            return $this->sendError('Validation Error',$validate->errors());
        }

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            $user = User::where('email', $request->email)->get();
            return $this->sendResponse(new UserResource($user[0]),'Login successful');
        }
        return $this->sendError('Wrong password');
    }

    public function create(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email'   => 'required|email|unique:users,email',
            'username' => 'required',
            'password' => 'required|min:6'
        ],
        [
            'email.unique' => "Email already exists!",
            'username.required' => 'Please enter an Username!',
            'email.required' => 'Please enter an Email!',
            'password.required' => 'Please enter a Password!',
        ] );

        if($validate->fails())
        {
            return $this->sendError('Validation Error',$validate->errors());
        }

        $user = new User;
        $user->email = $request->email;
        $user->name = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        return $this->sendResponse($user,'User successfully created');
    }
    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->forget('user');

        return redirect()->route('api.login');
    }
}
