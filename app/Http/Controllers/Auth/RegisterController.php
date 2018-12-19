<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Role;
use Illuminate\Support\Str;

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
    protected $redirectTo = '/';

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
            'nama_instansi' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create($permintaan)
    {
        $data = $permintaan->all();
        $role = Role::where("name","=","perusahaan")->first();
        $data['bio'] = 'Perusahaan';
        $data['role_id'] = $role->id;
        $data['slug'] = slugify($data['name']);
        $data['nama_instansi'] = 'PT Nganu';
        $data['email'] = 'shanjus@gmail.com';


        return User::create([
            'nama_instansi' => $data['nama_instansi'],
            'name' => $data['name'],
            'email' => $data['email'],
            'slug' => $data['slug'],
            'bio' => $data['bio'],
            'role_id' => $data['role_id'],
            'password' => Hash::make($data['password']),
        ])->attachRole($role);
    }
}
