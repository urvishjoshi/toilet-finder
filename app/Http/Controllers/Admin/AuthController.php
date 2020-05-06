<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\ToiletOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Auth;

class AuthController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

	public function showLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function login(Request $request)
	{
	    $validate = Validator::make($request->all(), [
	        'email'   => 'required|email|exists:admins,email',
	        'password' => 'required|min:6'
	    ],
    	[
    		'email.exists' => 'Email doesn'."'".'t exist!',
    		'email.required' => 'Please enter an Email!',
    		'password.required' => 'Please enter a Password!',
    	] );

	    if($validate->fails())
		{
			return back()->withInput($request->only('email', 'remember'))->withErrors($validate);
		}

	    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
	    	
	        return redirect('admin/dashboard');
	    }
	    return back()->withInput($request->only('email'))->withErrors(['password'=>'Wrong password!']);
	}

	public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->forget('admin');

        return redirect()->route('a.login');
    }
}
