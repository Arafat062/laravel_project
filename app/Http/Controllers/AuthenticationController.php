<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuthenticationController extends Controller
{
   public function add_user(Request $request)
   {
   	$data=array();
   	$data['fname']=$request->fname;
   	$data['lname']=$request->lname;
   	$data['org_name']=$request->org_name;
   	$data['street']=$request->street;
   	$data['city']=$request->city;
   	$data['email']=$request->email;
   	$data['mobile']=$request->mobile;
   	$data['password']=$request->password;
   	$data['confirm_password']=$request->confirm_password;
   	if ($request->password==$request->confirm_password) {
   		DB::table('users_details')->insert($data);
   	return view('Authentication.registration');
   	}
   	else{
   		echo "Can't be inserted"; die;
   	}
   }

   public function log_in(Request $request)
   {
   	$data=$request->email;
   	$pass=$request->password;
   	$info=DB::table('users_details')
   			->where('email',$data)
   			->orWhere('mobile',$data)
   			->first();
   			// echo $info->fname; die;
   	if ($info->password==$pass) {
   		return redirect('/registrationlisense');
   			}
   			else{
   				return redirect('/login');
   			}
   // 	if ($info->email==$data && $info->password==$password) {
   // 		echo "hi...!!!"; die;
   // 	// return view('Authentication.registration');
   // 	}
   // 	elseif ($info->mobile==$data && $info->password==$password) {
   // 		echo "hello...!!!"; die;
   // 	}
   // 	else{
   // 		echo "Can't be logged in"; die;
   // 	}
    }
}
