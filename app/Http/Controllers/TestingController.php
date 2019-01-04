<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class TestingController extends Controller
{
    public function excelExport(){
    	return Excel::download(new UsersExport,'users.xlsx');
    }

    public function excelImport(){
    	Excel::import(new UsersImport, 'user.xlsx');

    	return redirect('/')->with('success','All good!');
    }
}
