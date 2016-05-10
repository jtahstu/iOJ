<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ClassifyController extends Controller {
	public function index() {
		$list=DB::table('classify')->paginate(100);
		return view('classify',['list'=>$list]);
	}
	
	public function problem($id){
		$res=DB::select("select * from classifys A,nyojproblemlist B,classify C where A.pid=B.pid and A.classify=C.id and classify=$id;");
		return view('classifys',['list'=>$res]);
	}

}
