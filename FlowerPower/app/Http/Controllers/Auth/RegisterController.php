<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Customer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Customer_Name' => ['required', 'string', 'max:255'],
            'Customer_MiddleName' => ['string', 'max:255'],
            'Customer_LastName' => ['required', 'string', 'max:255'],
            'Customer_Email' => ['required', 'string', 'email', 'max:255', 'unique:Customers'],
            /* password confirmation needs to be fixed */
            'Customer_Password' => ['required', 'string', 'min:8'],
            'Customer_Addres' => ['required', 'string'],
            'Customer_HouseNumber' => ['required', 'string'],
            'Customer_PostalCode' => ['required', 'string', 'min:6', 'max:6'],
            'Customer_TownShip' => ['required', 'string'],
            'Customer_PhoneNumber' => ['required', 'string', 'min:8'],
            'Customer_DateOfBirth' => ['required', 'date',],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Customer
     */
    protected function create(array $data)
    {
        return Customer::create([
            'Customer_Name' => $data['Customer_Name'],
            'Customer_MiddleName' => $data['Customer_MiddleName'],
            'Customer_LastName' => $data['Customer_LastName'],
            'Customer_Email' => $data['Customer_Email'],
            'Customer_Password' => Hash::make($data['Customer_Password']),
            'Customer_Addres' => $data['Customer_Addres'],
            'Customer_HouseNumber' => $data['Customer_HouseNumber'],
            'Customer_PostalCode' => $data['Customer_PostalCode'],
            'Customer_TownShip' => $data['Customer_TownShip'],
            'Customer_PhoneNumber' => $data['Customer_PhoneNumber'],
            'Customer_DateOfBirth' => $data['Customer_DateOfBirth'],
        ]);
    }
}
