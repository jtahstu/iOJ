<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HduojController extends Controller {
	public function index() {
		//
		$problemList= DB::table('hduojproblemlist')->paginate(100);
		return view('hduoj.index',['list'=>$problemList]);
		
	}
	public function problem(){
    	
    }
	

}
