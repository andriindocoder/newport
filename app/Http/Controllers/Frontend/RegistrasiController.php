<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\PmkuStoreRequest;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;


class RegistrasiController extends \App\Http\Controllers\Auth\RegisterController
{
    public function index(){
        return view('frontend.registrasi.index');
    }

    public function tipePerusahaan(Request $request){
        if($request->get('agen_pelayaran') == 1){
            return view('frontend.registrasi.ap');
        }else{
            return view('frontend.registrasi.non-ap');  
        }
    }

    public function pmku(PmkuStoreRequest $request){
        $this->create($request);
        // $role = Role::where("name","=","perusahaan")->first();
        // $data = $request->all();
        // $data['bio'] = 'Perusahaan';
        // $data['role_id'] = $role->id;
        // $data['slug'] = slugify($data['name']);
        // $data['email'] = 'jamkukuku@gmail.com';
        // $data['nama_instansi'] = 'Perusahaan Anu';
        
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'slug' => $data['slug'],
        //     'bio' => $data['bio'],
        //     'role_id' => $data['role_id'],
        //     'password' => Hash::make($data['password']),
        //     'nama_instansi' => $data['nama_instansi'],
        // ])->attachRole($role);

        // return "oye";
        
    }
}
