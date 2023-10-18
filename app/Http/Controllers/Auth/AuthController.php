<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseController
{
    // ======================== Register ======================== //

    function RegisterPage()
    {
        return view('Auth/register');
    }

    // Register function (REGISTER LOGIC)

    public function register(RegisterRequest $request)
    {

        $hashedPassword = Hash::make($this->GetFromReuqest($request, 'password'));

        $data['name'] = $this->GetFromReuqest($request, 'name');
        $data['email'] = $this->GetFromReuqest($request, 'email');
        $data['password'] = $hashedPassword;

        $this->CRUD(new User(), null, 'create', $data);


        $this->attemptAuthentication($request);

        return $this->Move('redirect_with_message', 'home', 'create', 'account created');
    }

    // end (REGISTER LOGIC)


    // ======================== Login ======================== //


    function LoginPage()
    {
        return view('Auth/login');
    }

    // login function (LOGIN LOGIC)

    public function login(LoginRequest $request)
    {

        $credentials = $request->only('email', 'password');

        $user = $this->Select_column('first', User::class, '*', ['email' => $credentials['email']]);

        if ($user->status == 'inactive') {
            return $this->Move('redirect_with_message', 'LoginPage', 'inactive', 'This account is diactivated');
        }

        if ($this->attemptAuthentication($request)) {
            return $this->Move('redirect_with_message', 'home', 'welcome', 'login successfuly');
        } else {
            return $this->Move('redirect_with_message', 'LoginPage', 'fail', 'Incorrect email or password');
        }
    }

    // end (LOGIN LOGIC)


    // logout

    public function logout()
    {
        Auth::logout();
        return $this->Move('redirect_with_message', 'home', 'out', 'logged out');
    }
}
