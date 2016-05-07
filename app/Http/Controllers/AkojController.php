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

    public function problem(){
    	
    }
}
