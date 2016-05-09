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
	public function problem($pid){
    	$res=DB::table('hduojaccode')->where('pid',$pid)->first();
		if($res){
			$code=$res->code;
		}else{
			$code="不存在改题题解！";
		}
		
		//更改v浏览数
		$view=DB::select("select view from hduojproblemlist where pid=$pid");
		foreach($view as $rec){
			$views=$rec->view+1;
			DB::update("update hduojproblemlist set view=? where pid=?",[$views,$pid]);
			break;
		}
		
		return view('hduoj.problem',['pid'=>$pid,'code'=>$code]);
    }
	

}
