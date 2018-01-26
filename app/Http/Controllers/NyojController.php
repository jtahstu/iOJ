<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Cache;
use Input;

class NyojController extends Controller
{
    public function index(){
//       $problemList=DB::select('select * from nyojproblemlist limit 100;');
		$problemList= DB::table('nyojproblemlist')->paginate(100);
		return view('nyoj.index',['list'=>$problemList]);
    }
	public function problem($pid){
    	$problem=DB::table('nyojproblems')->where("pid","$pid")->first();
		if(!$problem){
			$content="<dt>题目没有抓取</dt>";
		}else{
			$content=str_replace("DL", "div", $problem->content);
			$content=str_replace("<H2>", "<H2 style=\"text-align:center\">", $content);
			$content=str_replace("class=\"problem-ins\"", "class=\"problem-ins\" style=\"text-align:center\"", $content);
		}
		//更改v浏览数
		$view=DB::select("select view from nyojproblemlist where pid=$pid");
		foreach($view as $rec){
			$views=$rec->view+1;
			DB::update("update nyojproblemlist set view=? where pid=?",[$views,$pid]);
			break;
		}
		return view('nyoj.problem',['problem'=>$content,'pid'=>$pid]);
    }
	public function code(Request $request){
		$data=Input::all();
		$pid=$data['pid'];
		$res=DB::table('nyojaccode')->where('pid',$pid)->first();
		if($res){
		    if(\Auth::check() || $pid<=100)
			    $code=$res->code;
			else
		        $code = '请登陆后查看题解';
		}else{
			$code="不存在改题题解！".$pid;
		}
		echo json_encode(htmlspecialchars($code));
	}
}
