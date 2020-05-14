<?php

namespace App\Http\Controllers\Toiletowner;
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
        $this->middleware('guest:toiletowner')->except('logout');
    }

	public function showLoginForm()
    {
        return view('auth.login', ['url' => 'toiletowner']);
    }

    public function login(Request $request)
	{
	    $validate = Validator::make($request->all(), [
            'email'   => 'required|email|exists:toilet_owners,email',
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

	    if (Auth::guard('toiletowner')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
	    	
	        return redirect('toiletowner/dashboard');
	    }
	    return back()->withInput($request->only('email'))->withErrors(['password'=>'Wrong password!']);
	}

	public function showRegisterForm()
    {
        $url = 'toiletowner';
        return view('auth.register', ['url' => $url]);
    }

    protected function create(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name'   => 'required|string|max:255',
            'email'   => 'required|email|unique:toilet_owners,email',
            'password' => 'required|min:6|confirmed',
            'mobileno' => 'required|numeric|min:10|unique:toilet_owners,mobileno',
        ],
        [
            'email.unique' => 'Email already exists try logging-in or use another!',
            'mobileno.unique' => 'Phone number exists try logging-in or use another!',
            'email.required' => 'Please enter an Email!',
            'password.required' => 'Please enter a Password!',
        ] );

        if($validate->fails())
        {
            return back()->withInput($request->except('password'))->withErrors($validate);
        }
        $writer = ToiletOwner::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobileno' => $request['mobileno'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('toiletowner/login')->withInput($request->only('email'))->with('reg.msg',' Registered successfully, please login');
    }
    
	public function logout(Request $request)
    {
        Auth::guard('toiletowner')->logout();

        $request->session()->forget('toiletowner');

        return redirect()->route('to.login');
    }
}

