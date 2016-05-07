<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {
	public function register(Request $request) {
		$name = $request -> input('name');
		$pass = $request -> input('password');
		$pass2 = $request -> input('password2');
		echo $name . $pass . $oass2;
	}

}
