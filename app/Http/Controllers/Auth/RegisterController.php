<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\Role;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'addressLine1' => ['required', 'string', 'max:255'],
            'addressLine2' => ['required', 'string', 'max:255'],
            'town' => ['required', 'string', 'max:255'],
            'county' => ['required', 'string', 'max:255'],
            'nameOnCard' => ['required', 'string', 'max:255'],
            'cardNumber' => ['required', 'string', 'size:16', 'unique:customers'],
            'expiryDate' => ['required', 'string', 'size:5'],
            'cvv' => ['required', 'string', 'size:3']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $role = Role::where('name', 'customer')->first();
        $user->roles()->attach($role->id);

        $customer = new Customer();
        $customer->addressLine1 = $data['addressLine1'];
        $customer->addressLine2 = $data['addressLine2'];
        $customer->town = $data['town'];
        $customer->county = $data['county'];
        $customer->nameOnCard = $data['nameOnCard'];
        $customer->cardNumber = $data['cardNumber'];
        $customer->expiryDate = $data['expiryDate'];
        $customer->cvv = $data['cvv'];
        $customer->user_id = $user->id;

        $customer->save();

        return $user;
    }

    public function redirectTo(){
        $user = Auth::user();

        if ($user->hasRole('admin')){
            $url = '/admin/home';
        }
        else if ($user->hasRole('customer')){
            $url = '/';
        }

        else {
            throw new Exception("Undefined user role");
        }
        return $url;
    }
}
