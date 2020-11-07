<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
   	return view('Authentication.registration');
   }
 
   public function login()
   {
   	return view('Authentication.login');
   }
 
}
