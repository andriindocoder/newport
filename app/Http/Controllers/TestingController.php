<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class TestingController extends Controller
{
    public function excelExport(){
    	return Excel::download(new UsersExport,'users.xlsx');
    }
}
