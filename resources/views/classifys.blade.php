@extends('layouts')
@section('zojcontent')
<script type="text/javascript">
	$(function(){
		$('footer').hide();
		$('#count').hide();
		var title= $('.type').eq(0).text();
//		console.log("title");
		$("#title").html(title+" -- 南阳OJ");
		$(".type").hide();
	});
</script>
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
                       $(this).html() +"字典序"+ $str + "序 排列");
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
<div class="pad60">
	<div class="col-lg-12">
		<div class="col-lg-1">
		</div>
		<div class="table-responsive col-lg-10">
			<h3 id="title" align="center"></h3>
			<p id="tip" align="center">
				
			</p>
			<table class="table table-bordered table-hover table-condensed" id="problemlist">
				<tr>
					<th class="center">
						<a href="javascript:">序号</a>&nbsp;&nbsp;<i class="fa fa-sort"></i>
					</th>
					<th class="center">
						<a href="javascript:">题号</a>&nbsp;&nbsp;<i class="fa fa-sort"></i>
					</th>
					<th class="center">
						<a href="javascript:">难度</a>&nbsp;&nbsp;<i class="fa fa-sort"></i>
					</th>
					<th class="center">
						题目
					</th>
				</tr>
				<span id="count">
					{{$count=1}}
				</span>
				@foreach ($list as $rec)
				<tr class="list">
					<td class="center">
						{{$count++}}
					</td>
					<td class="center">
						{{$rec->pid}}
					</td>
					<td class="center">
						{{$rec->difficult}}
					</td>
					<td class="center">
						<a href="/ioj/public/nyoj/pid/{{$rec->pid}}" target="_blank">
							{{$rec->title}}
						</a>
					</td>
					<span class="type">
						{{$rec->classifytype}}
					</span>
				</tr>
				@endforeach
			</table>
			<div class="col-lg-1">
			</div>
		</div>
	</div>
</div>
@endsection
