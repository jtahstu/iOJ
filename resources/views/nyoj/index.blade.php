@extends('layouts')
@section('nyojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('nyojcontent')
<script src="{{URL::asset('js/jquery.tablesort.min.js')}}">
</script>
<script src="{{URL::asset('js/jquery-latest.min.js')}}">
</script>
<script type="text/javascript">
//      $(function() {
//          var $tb = $("#problemlist");
//          var $tip = $("#tip");
//          var $bln = true;
//          var $str = "降";
//          //遍历table标题中的a元素
//          $(".table tr th a").each(function(i) {
//              $(this).bind("click", function() {
//                  $bln = $bln ? false : true;
//                  $str = $bln ? "降" : "升";
//                  $tip.show().html("当前按  " +
//                     $(this).html()+"字典序" + $str + "序 排列");
//                  $tb.sortTable({
//                      onCol: i + 1,
//                      keepRelationships: true,
//                      sortDesc: $bln
////                      sortType:numeric
//                  });
//              });
//          });
//      });
$(function() {
	$('#problemlist').tablesort().data('tablesort');
	$('th.number').data('sortBy', function(th, td, sorter) {
		return parseInt(td.text(), 10);
	});
})</script>
<?php
function getAS($page) {
	$as = array();
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "http://acm.nyist.net/JudgeOnline/problemset.php?page=$page");
		curl_setopt($curl, CURLOPT_HEADER, 1);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HEADER, array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8", "Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3"));
		curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:45.0) Gecko/20100101 Firefox/45.0');
		curl_setopt($curl, CURLOPT_ENCODING, 'gzip');
		curl_setopt ($curl, CURLOPT_CONNECTTIMEOUT, 3);
		$data = curl_exec($curl);
		curl_close($curl);
		$regex = "/.*?<TD><\/TD>.*?<TD>(.*?)<\/TD>.*?<TD class=\"pass-total tal\">\((.*?)\/(.*?)\)<\/TD><td><\/td><\/TR>.*?/";
		if (preg_match_all($regex, $data, $matches)) {
			$i = 0;
			foreach ($matches[1] as $pid) {
				$as[$pid] = array("ac" => $matches[2][$i], "sub" => $matches[3][$i]);
				$i++;
			}
		}
		return $as;
}
function getAS2($page){
	return array();
}
$as = getAS($list -> currentPage());

?>
<div class="pad60 nyojcontent" style="background-image: url({{URL::asset('img/bgimg.jpg')}});">
	<nav class="center">
		{!! $list->render() !!}
	</nav>
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<p id="tip" align="center">
			</p>
			<table class="table table-bordered table-hover table-condensed" id="problemlist">
				<tr>
					<th class="center number">
						题号&nbsp;
						<a>
							<i class="fa fa-sort">
							</i>
						</a>
					</th>
					<th class="center number">
						难度 &nbsp;
						<a>
							<i class="fa fa-sort">
							</i>
						</a>
					</th>
					<th class="center">
						题目
					</th>
					<th class="center number">
						AC&nbsp;
						<a>
							<i class="fa fa-sort">
							</i>
						</a>
					</th>
					<th class="center number">
						Submit&nbsp;
						<a>
							<i class="fa fa-sort">
							</i>
						</a>
					</th>
					<th class="center number">
						浏览数&nbsp;
						<a>
							<i class="fa fa-sort">
							</i>
						</a>
					</th>
				</tr>
				@foreach ($list as $rec)
				<tr class="list">
					<td class="center">
						{{$rec->pid}}
					</td>
					<td class="center">
						{{$rec->difficult}}
					</td>
					<td class="center">
						<a href="/ioj/public/nyoj/pid/{{$rec->pid}}">
							{{$rec->title}}
						</a>
					</td>
					<td class="center">
						<?php
							if(isset($as[$rec->pid]['ac'])){
								echo $as[$rec->pid]['ac'];
							}else{
								echo 0;
							}	
						?>
					</td>
					<td class="center">
						<?php
							if(isset($as[$rec->pid]['sub'])){
								echo $as[$rec->pid]['sub'];
							}else{
								echo 0;
							}	
						?>
					</td>
					<td class="center">
						{{$rec->view}}
					</td>
				</tr>
				@endforeach
			</table>
			<div class="col-lg-1">
			</div>
		</div>
	</div>
	<nav class="center">
		{!! $list->render() !!}
	</nav>
</div>
@endsection