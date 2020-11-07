<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class LisenseController extends Controller
{
    public function make_key(Request $request)
    {
    	$client_id=$request->clientid;
    	$expire=$request->expire_date;
    	$data=DB::table('users_details')->where('id',$client_id)->first();
    	$created=$data->created_at;

    	$expire_date=(new Carbon($created))->addMonth($expire);
    	$update=DB::table('users_details')->where('id',$client_id)->update(['expire_date' => $expire_date]);
    	if ($update) {
    		echo "updated";
    		$info=DB::table('users_details')->where('id',$client_id)->first();
    		$date=$info->expire_date;
    		$value=array();
    		$value['dd']=bcrypt((new Carbon($date))->addDay($client_id));
    		$value['mm']=bcrypt((new Carbon($date))->addMonth($client_id));
    		$value['yy']=bcrypt((new Carbon($date))->addYear($client_id));
    		$insert=DB::table('gen_keys')->insert($value);
    		return redirect('key_generate');
    	}
    	else{
    		echo "sorry";die;
    	}
   		return view('Lisence.create');
    }

    public function key_generate()
    {
    	$keys=DB::table('gen_keys')->first();
    	return view('key_generate')->with('info',$keys);
    }
}
