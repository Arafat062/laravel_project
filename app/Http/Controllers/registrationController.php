<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class registrationController extends Controller
{
    public function registrationlisense()
    {
    	$data=DB::table('users_details')->first();
   		return view('Lisence.registrationlisense')->with('info',$data);
    }
     public function reg2()
    {
   	return view('Lisence.reg2');
    }
}
