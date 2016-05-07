<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Cache;

class NyojController extends Controller
{
    public function index()
    {
        //
//       $problemList=DB::select('select * from nyojproblemlist limit 100;');
		$problemList= DB::table('nyojproblemlist')->paginate(100);
		return view('nyoj.index',['list'=>$problemList]);
    }
	public function problem($pid){
    	$problem=DB::table('nyojproblems')->where("pid","$pid")->first();
		$content=str_replace("DL", "div", $problem->content);
		$content=str_replace("<H2>", "<H2 style=\"text-align:center\">", $content);
		$content=str_replace("class=\"problem-ins\"", "class=\"problem-ins\" style=\"text-align:center\"", $content);
//		var_dump($problem->content);
	
		$res=DB::table('nyojaccode')->where('pid',$pid)->first();
		if($res){
			$code=$res->code;
		}else{
			$code="不存在改题题解！";
		}
		
		return view('nyoj.problem',['problem'=>$content,'pid'=>$pid,'code'=>$code]);
    }
    
}
