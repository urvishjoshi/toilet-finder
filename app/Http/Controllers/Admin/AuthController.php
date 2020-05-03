<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\ToiletOwner;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

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
	    $this->validate($request, [
	        'email'   => 'required|email|exists:toilet_owners',
	        'password' => 'required|min:6'
	    ]);

	    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
	    	
	        return redirect('admin/dashboard');
	    }
	    return back()->withInput($request->only('email', 'remember'));
	}

	public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->forget('admin');

        return redirect()->route('a.login');
    }
}
