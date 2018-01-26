<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class ZojController extends Controller {
	public function index() {
		//
		$problemList= DB::table('zojproblemlist')->paginate(100);
		return view('zoj.index',['list'=>$problemList]);
		
	}
	public function problem($pid){
    	$res=DB::table('zojaccode')->where('pid',$pid)->first();
		if($res){
			if(\Auth::check() || $pid<=1100)
			    $code=$res->code;
			else
		        $code = '请登陆后查看题解';
		}else{
			$code="不存在改题题解！";
		}
		
		//更改v浏览数
		$view=DB::select("select view from zojproblemlist where pid=$pid");
		foreach($view as $rec){
			$views=$rec->view+1;
			DB::update("update zojproblemlist set view=? where pid=?",[$views,$pid]);
			break;
		}
		
		return view('zoj.problem',['pid'=>$pid,'code'=>$code]);
    }
	

}
