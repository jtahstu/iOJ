<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AkojController extends Controller
{
    public function index()
    {
       $problemList= DB::table('akojproblemlist')->paginate(100);
		return view('akoj.index',['list'=>$problemList]);
    }

    public function problem($pid){
    	$res=DB::select("select * from akojaccode where pid=$pid limit 100");
		if($res){
			
		}else{
			$res="不存在改题题解！";
		}
		//更改v浏览数
		$view=DB::select("select view from akojproblemlist where pid=$pid");
		foreach($view as $rec){
			$views=$rec->view+1;
			DB::update("update akojproblemlist set view=? where pid=?",[$views,$pid]);
			break;
		}
		return view('akoj.problem',['pid'=>$pid,'code'=>$res]);
    }
}
