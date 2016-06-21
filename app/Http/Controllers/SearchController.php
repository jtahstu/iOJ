<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Input;
use DB;

class SearchController extends Controller {
	public function index() {
		return view('search.index');
	}

	public function back(Request $request) {
		$data = Input::all();
		if ($data['oj'] == 0) {
			$oj = 'akoj';
		} elseif ($data['oj'] == 1) {
			$oj = 'nyoj';
		} elseif ($data['oj'] == 2) {
			$oj = 'hduoj';
		} elseif ($data['oj'] == 3) {
			$oj = 'poj';
		} elseif ($data['oj'] == 4) {
			$oj = 'zoj';
		}
		//		$oj=$data['oj']==0?'akoj':($data['oj']==1?'nyoj':'hduoj');
		$type = $data['type'];
		$content = trim($data['content']);
		if ($type == 3) {
			$sql = "select * from " . $oj . "problemlist where pid=" . (int)$content;
			$res = DB::select($sql);
			foreach ($res as $rec) {
				$back = "<table class=\"table table-bordered table-hover pad50\" >
				<tr class=\"list center\">
					<td>" . $rec -> pid . "</td>
					<td><a href=\"/ioj/public/$oj/pid/$content\">" . $rec -> title . "</a></td>
				</tr>
				</table>";
				break;
			}
			echo json_encode($back);
		} else {
			$sql = "select * from " . $oj . "problemlist where title like \"%$content%\";";
			$res = DB::select($sql);
			$back = "<table class=\"table table-bordered table-hover\">";
			foreach ($res as $rec) {
				$back .= "<tr class=\"list center\">
					<td>" . $rec -> pid . "</td>
					<td><a href=\"/ioj/public/$oj/pid/$rec->pid\">" . $rec -> title . "</a></td>
				</tr>";
			}
			$back .= "</table>";
			//			echo json_encode($sql);
			echo json_encode($back);
		}
	}

}
