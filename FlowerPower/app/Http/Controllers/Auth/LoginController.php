<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected $username = 'Customer_Email';

    public function loginNameOrEmail(Request $request)
    {
        $field = filter_var($request->input('Customer_Email'), FILTER_VALIDATE_EMAIL) ? 'email_address' : 'username';

        $request->merge([$field => $request->input('Customer_Email')]);

        $this->username = $field;

        return $this->login($request);

    }


    public function username()
    {
        return $this->username;
    }

}
