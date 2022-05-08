<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Klient;
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

    use RegistersKlients;

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
            'imie_klienta' => ['required', 'string', 'max:255'],
            'nazwisko_klienta' => ['required', 'string', 'max:255'],
            'nr_tel_klienta' => ['required', 'integer', 'max:9'],
            'email_klienta' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'haslo_klient' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return Klient::create([
            'imie_klienta' => $data['imie_klienta'],
            'nazwisko_klienta' => $data['nazwisko_klienta'],
            'nr_tel_klienta' => $data['nr_tel_klienta'],
            'email_klienta' => $data['email_klienta'],
            'haslo_klient' => Hash::make($data['haslo_klient']),
        ]);
    }
}
