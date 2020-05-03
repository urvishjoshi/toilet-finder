<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('api.logout');
    }

    public function login(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => [
                'required',
                Rule::exists('users')->where('email',$request->email),
            ],
            'password' => 'required'
        ],
        [
            'email.exists' => "Email is not exists.",
            'email.required' => 'The Email is required.',
            'email.email' => 'Please enter valid email.',
        ]);
        
        if($validate->fails())
        {
            return Redirect()->back()->with(['status'=>false,'msg'=>"Validation Error.",'errors'=>$validate->errors()]);
        }

        if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            
            return redirect('admin/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->forget('web');

        return redirect()->route('api.login');
    }
}
