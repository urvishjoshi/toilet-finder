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
	    $this->validate($request, [
	        'email'   => 'required|email',
	        'password' => 'required|min:6'
	    ]);

	    if (Auth::guard('toiletowner')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
	    	
	        return redirect('toiletowner/dashboard');
	    }
	    return back()->withInput($request->only('email', 'remember'));
	}

	public function showRegisterForm()
    {
        $url = 'toiletowner';
        return view('auth.register', ['url' => $url]);
    }

    protected function create(Request $request)
    {
        $this->validator($request->all())->validate();
        $writer = ToiletOwner::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('toiletowner/login');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
	public function logout(Request $request)
    {
        Auth::guard('toiletowner')->logout();

        $request->session()->forget('toiletowner');

        return redirect()->route('to.login');
    }
}

