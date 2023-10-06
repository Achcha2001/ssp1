<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if ($this->isAdmin($credentials)) {
          
            Auth::loginUsingId(1);

            return $this->sendLoginResponse($request);
        }

        
        if ($this->isPortalChecker($credentials)) {
           
            Auth::loginUsingId(2); 

            return $this->sendLoginResponse($request);
        }

        
        if (Auth::attempt($credentials)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        $user = Auth::user();

        if ($user) {
            if ($this->isAdminUser($user)) {
                return redirect()->intended('/dashboard'); 
            } elseif ($this->isPortalCheckerUser($user)) {
                return redirect()->intended('/checker'); 
            }
        }

        
        return $this->authenticated($request, $user)
            ?: redirect()->intended($this->redirectPath());
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')
            ->withInput($request->only('email'))
            ->withErrors([
                'email' => 'These credentials do not match our records.',
            ]);
    }

    protected function isAdmin(array $credentials)
    {
        return $credentials['email'] === 'admin@example.com' && $credentials['password'] === 'ABC';
    }

    protected function isPortalChecker(array $credentials)
    {
        // Check if the provided credentials match the portal checker credentials
        return $credentials['email'] === 'check@gmail.com' && $credentials['password'] === 'BDG';
    }

    protected function isAdminUser($user)
    {
        // You should have some way to identify an admin user, e.g., a role check
        return $user->email === 'admin@example.com';
    }

    protected function isPortalCheckerUser($user)
    {
        // You should have some way to identify a portal checker user, e.g., a role check
        return $user->email === 'check@gmail.com';
    }
}
