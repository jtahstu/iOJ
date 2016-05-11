<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
class HomeController extends Controller {
	
	public function index(){
		return \Auth::user()->name;
	}


}

