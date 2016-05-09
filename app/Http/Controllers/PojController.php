<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class PojController extends Controller {
	public function index() {
		//
		$problemList= DB::table('pojproblemlist')->paginate(100);
		return view('poj.index',['list'=>$problemList]);
		
	}
	public function problem($pid){
    	$res=DB::table('pojaccode')->where('pid',$pid)->first();
		if($res){
			$code=$res->code;
		}else{
			$code="不存在改题题解！";
		}
		
		//更改v浏览数
		$view=DB::select("select view from pojproblemlist where pid=$pid");
		foreach($view as $rec){
			$views=$rec->view+1;
			DB::update("update pojproblemlist set view=? where pid=?",[$views,$pid]);
			break;
		}
		
		return view('poj.problem',['pid'=>$pid,'code'=>$code]);
    }
	

}
