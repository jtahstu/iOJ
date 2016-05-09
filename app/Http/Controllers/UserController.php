<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use DB;

class UserController extends Controller {
	public function register(Request $request) {
		$data=Input::all();
		$name = $data['name'];
		$pass = $data['pass'];
		$pass2 = $data['pass2'];
		if($pass==$pass2){
			$sql="";
			$ins=DB::insert('insert into user(uid,name,password) values(?,?,?)',["",$name,$pass]);
			if($ins){
				echo "注册成功！";
				$request->session()->put('name', $name);
			}
		}else{
			echo "注册失败！";
		}
		return view('index');
	}
	
	

}
