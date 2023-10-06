<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\reguser;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('signup');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $reguser = $this->create($request->all());

        $this->guard()->login($reguser);

        return $this->registered($request, $reguser)
            ?: redirect($this->redirectPath());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:regusers'], // Update the unique rule
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'date_of_birth' => ['required', 'date'],
            'nic_passport' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
            'yes_no' => ['boolean'],
        ]);
    }

    protected function create(array $data)
    {
        return reguser::create([
            
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'date_of_birth' => $data['date_of_birth'],
            'nic_passport' => $data['nic_passport'],
            'contact_number' => $data['contact_number'],
            'yes_no' => isset($data['yes_no']) ? true : false,
        ]);
    }
}
