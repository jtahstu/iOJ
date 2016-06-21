@extends('layouts')
@section('akojactive','active')
@section('top','
<a href="#" class="top">
	↑
</a>')
@section('akojcontent')
<script src="{{URL::asset('js/jquery.tableSort.js')}}"></script>
<script type="text/javascript">
        $(function() {
            var $tb = $("#problemlist");
            var $tip = $("#tip");
            var $bln = true;
            var $str = "降";
            //遍历table标题中的a元素
            $(".table tr th a").each(function(i) {
                $(this).bind("click", function() {
                    $bln = $bln ? false : true;
                    $str = $bln ? "降" : "升";
                    $tip.show().html("当前按  " +
                       $(this).html()+"字典序" + $str + "序 排列");
                    $tb.sortTable({
                        onCol: i + 1,
                        keepRelationships: true,
                        sortDesc: $bln
//                      sortType:numeric
                    });
                });
            });
        });
    </script>
<div class="akojcontent pad60" style="background-image: url({{URL::asset('img/bgimg.jpg')}});">
	<nav class="center">
		{!! $list->render() !!}
	</nav>
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<p id="tip" align="center"></p>
			<table class="table table-bordered table-hover table-condensed" id="problemlist">
					<tr>
						<th class="center">
							<a href="javascript:">题号</a>&nbsp;&nbsp;<i class="fa fa-sort"></i>
						</th>
						<th class="center">
							题目
						</th>
						<th class="center">
							浏览数
						</th>
						
					</tr>
					@foreach ($list as $rec)
					<tr class="list">
						<td class="center">
							{{$rec->pid}}
						</td>
						<td class="center">
							<a href="/ioj/public/akoj/pid/{{$rec->pid}}">
								{{$rec->title}}
							</a>
						</td>
						<td class="center">
						{{$rec->view}}
						</td>
						
					</tr>
					@endforeach
			</table>
		</div>
		<div class="col-lg-1">
		</div>
	</div>
	<nav class="center">
		{!! $list->render() !!}
	</nav>
</div>
@endsection
