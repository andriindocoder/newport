<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function kirim(){
    	$data = ['firstname' => 'Recipient Name'];

        $member = [
            'email' => 'andriwicaksonost@gmail.com',
            'name'  => 'Andri Wicaksono',
            'subject' => 'Oye'
        ];

        Mail::send('test.example', $data, function($m) use ($member){
            $m->to($member['email'], $member['name'])->subject($member['subject']);
       });
    }
}
